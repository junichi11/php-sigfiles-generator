<?php

use utils\Html;
use utils\Log;
use utils\Php;
use utils\SourceDocFixer;
use utils\Strings;

class PhpMethod extends SigFileElement {

    /** @var string[] */
    protected $modifiers = [];
    /** @var bool */
    private $alias = false;
    /** @var string */
    private $type;
    /** @var PhpParameters */
    private $parameters;
    /** @var PhpDoc */
    private $phpDoc;

    protected function signatureInternal(bool $withPhpDoc, int $indent = 0): string {
        if ($this->alias) {
            return $this->signatureAlias($withPhpDoc, $indent);
        } else {
            return $this->signatureRegular($withPhpDoc, $indent);
        }
    }

    public function getName(): PhpName {
        $this->init();
        return $this->name;
    }

    protected function initInternal(): void {
        if ($this->name === null) {
            $this->initName();
        }
        if ($this->name === null) {
            Log::error("No name in file '$this->file'", true);
        }
        $this->phpDoc = new PhpDoc($this->xpath());
        if ($this->isAliasFunction()) {
            $this->initAlias();
            $this->phpDoc->parseFunctionAlias();
        } else {
            $this->initRegular();
            $this->phpDoc->parseFunction($this->getPhpDocType(), $this->parameters);
        }
    }

    protected function initName(): void {
        throw new RuntimeException("Name should already be set for method in file '$this->file'");
    }

    private function isAliasFunction(): bool {
        $title = Html::querySingleValue($this->xpath(), '//title');
        if (Strings::startsWith(strtolower($title), 'alias of')) {
            $this->alias = true;
            return true;
        }
        $description = null;
        if (SourceDocFixer::isHtmlDescriptionError($this->file)) {
            Log::warn("Using another lookup method for description to bypass errors in HTML page for '$this->file'");
            $description = Html::queryFirstValue($this->xpath(), '//*[@class="refsect1 description"]');
        } else {
            $description = Html::querySingleValue($this->xpath(), '//*[@class="refsect1 description"]');
        }
        if (Strings::contains($description, 'This function is an alias of')
                || Strings::contains($description, 'This language construct is equivalent to')) {
            $this->alias = true;
            return true;
        }
        return false;
    }

    private function initAlias(): void {
        Log::debug("Alias function from file '$this->file'");
    }

    private function initRegular(): void {
        $method = $this->detectMethodNode();
        $this->modifiers = Html::queryValues($this->xpath(), './/span[@class="modifier"]', $method, true);
        if (!count($this->modifiers)) {
            $this->modifiers[] = 'public';
        }
        $this->type = Html::querySingleValue($this->xpath(), '*[@class="type"]', $method, true);
        $params = $this->xpath()->query('.//*[@class="methodparam"]', $method);
        $this->parameters = new PhpParameters();
        $optionalParamIndexes = $this->getOptionalParameterIndexes($method);
        $hasOptionalParam = !empty($optionalParamIndexes);
        $paramIndex = 0;
        foreach ($params as $param) {
            if ($param->nodeValue === 'void') {
                // no parameters
                $paramIndex++;
                continue;
            }
            $type = Html::queryFirstValue($this->xpath(), '*[@class="type"]', $param);
            $reference = false;
            $name = Html::querySingleValue($this->xpath(), '*[@class="parameter"]', $param, true);
            if (!$name) {
                $reference = true;
                $name = Html::querySingleValue($this->xpath(), '*[@class="parameter reference"]', $param);
                $name = substr($name, 1);
            }
            $initializer = Html::querySingleValue($this->xpath(), '*[@class="initializer"]', $param, true);
            if ($initializer) {
                $initializer = Php::sanitizeInitializer($initializer, $type);
            }
            $optional = $hasOptionalParam && in_array($paramIndex, $optionalParamIndexes);
            $this->parameters->addParameter((new PhpParameter())
                ->setType($type)
                ->setName($name)
                ->setReference($reference)
                ->setInitializer($initializer)
                ->setOptional($optional));
            $paramIndex++;
        }
    }

    private function getOptionalParameterIndexes(\DOMNode $method): array {
        $indexes = [];
        $methodSynopsis = $method->nodeValue;
        $parenStart = strpos($methodSynopsis, '(');
        $parenEnd = strpos($methodSynopsis, ')', -1);
        $params = substr($methodSynopsis, $parenStart + 1, $parenEnd - ($parenStart + 1));
        $length = strlen($params);
        $bracketBalance = 0;
        $paramIndex = 0;
        for ($index = 0; $index < $length; $index++) {
            $c = $params[$index];
            switch ($c) {
                case '[':
                    // the first parameter may be optional
                    // e.g. myfunc([mixed $array])
                    $bracketBalance++;
                    $index++;
                    // e.g. myfunc($param1 [, mixed $value])
                    if ($params[$index] === ',') {
                        $paramIndex++;
                    }
                    $indexes[] = $paramIndex;
                    break;
                case ']':
                    $bracketBalance--;
                    break;
                case ',':
                    $paramIndex++;
                    if ($bracketBalance > 0) {
                        $indexes[] = $paramIndex;
                    }
                    break;
                default:
                    break;
            }
        }
        return $indexes;
    }

    protected function detectMethodNode(): DOMNode {
        $nodes = Html::queryNodes($this->xpath(), '//div[@class="methodsynopsis dc-description"]', null, true);
        if ($nodes->length === 0) {
            $nodes = Html::queryNodes($this->xpath(), '//div[@class="constructorsynopsis dc-description"]', null, false);
        }
        if ($nodes->length === 1) {
            return $nodes->item(0);
        }
        foreach ($nodes as $node) {
            $methodName = Html::querySingleValue($this->xpath(), '*[@class="methodname"]', $node);
            if ($this->isMySignature($methodName)) {
                return $node;
            }
        }
        Log::error("Cannot detect proper method node for $this->name in '$this->file'", true);
        return null;
    }

    protected function isMySignature(string $signature): bool {
        return Strings::contains($signature, '::');
    }

    private function signatureAlias(bool $withPhpDoc, int $indent): string {
        $out = $withPhpDoc ? $this->phpDoc($indent) : '';
        $out .= Strings::indent($indent, 'function ', false);
        $out .= $this->name->getName();
        $out .= '() {}' . NEW_LINE;
        return $out;
    }

    private function signatureRegular(bool $withPhpDoc, int $indent): string {
        $phpDoc = $withPhpDoc ? $this->phpDoc($indent) : '';
        $out = $this->signatureModifiers();
        $out .= 'function ';
        $out .= $this->name->getName();
        $out .= '(';
        $first = true;
        /* @var $parameter PhpParameter */
        foreach ($this->parameters->getParameters() as $parameter) {
            if ($first) {
                $first = false;
            } else {
                $out .= ', ';
            }
            if ($parameter->getType()) {
                $parameterType = Php::sanitizeType($parameter->getType(), false, false);
                if ($parameterType) {
                    $out .=  $parameterType . ' ';
                }
            }
            if ($parameter->isReference()) {
                $out .= '&';
            }
            $out .= $parameter->getName();
            if ($parameter->getInitializer()) {
                $out .= ' ' . $parameter->getInitializer();
            }
            if (!$parameter->getInitializer() && $parameter->isOptional()) {
                // e.g. [, mixed $... ]
                $out .= ' = NULL';
            }
        }
        $out .= ')';
        if ($this->name->getName() !== '__construct') {
            $type = Php::sanitizeType($this->type, false, false);
            if ($type) {
                $out .= ': ' . $type;
            }
        }
        $out .= $this->signatureMethodBody();
        return $phpDoc . Strings::indent($indent, $out);
    }

    protected function signatureModifiers(): string {
        $out = implode(' ', $this->modifiers);
        return $out ? $out . ' ' : '';
    }

    protected function signatureMethodBody(): string {
        if (in_array('abstract', $this->modifiers)) {
            return ';';
        }
        return ' {}';
    }

    private function phpDoc(int $indent = 0): ?string {
        if ($this->alias) {
            return $this->phpDoc->asFunctionAlias($indent);
        } else {
            return $this->phpDoc->asFunction($indent);
        }
    }

    private function getPhpDocType(): string {
        if ($this->type !== null) {
            return $this->type;
        }
        switch ($this->name->getName()) {
            case '__construct':
                return 'self';
            case '__destruct':
            case '__wakeup':
                return 'void';
            case '__sleep':
            case '__debugInfo':
                return 'array';
            case '__toString':
                return 'string';
            case '__invoke':
                return 'mixed';
            case '__set_state':
                return 'object';
            default:
                $errorType = $this->getDocErrorType();
                if ($errorType !== null) {
                    return $errorType;
                }
                Log::error("Unknown type for function '{$this->name->getName()}' in file '$this->file'", true);
        }
        return 'mixed';
    }

    private function getDocErrorType(): ?string {
        $filename = basename($this->file);
        // doc error? e.g. soapfault.soapfault.html
        $lowerName = strtolower($this->name->getName());
        if (Strings::startsWith($filename, "$lowerName.$lowerName")) {
            return 'self';
        }
        switch ($filename) {
            case 'syncsharedmemory.read.html':
            case 'transliterator.transliterate.html':
                return 'string';
            case 'syncsharedmemory.write.html':
                return 'int';
        }
        if (Strings::startsWith($filename, 'ui-')) {
            return 'void';
        }
        if (Strings::startsWith($filename, 'vtiful-kernel-excel.')) {
            return 'self';
        }
        if (Strings::startsWith($filename, 'vtiful-kernel-format.')) {
            return 'resource';
        }
        return null;
    }

}
