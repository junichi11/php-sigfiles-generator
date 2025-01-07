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
    /** @var PhpMethod **/
    private $aliasedMethod = null;
    /** @var string[] */
    private const NO_RETURN_TYPE_METHODS = [
        '__construct',
        '__destruct',
        '__clone',
    ];

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

    public function getParameters(): ?PhpParameters {
        return $this->parameters;
    }

    public function getType(): ?string {
        return $this->type;
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
            $docType = $this->type === null ? null : $this->getPhpDocType();
            $this->phpDoc->parseFunctionAlias($docType, $this->parameters);
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
            $this->setAliasedMethod();
            return true;
        }
        return $this->alias;
    }

    private function setAliasedMethod(): void {
        // function alias
        $elements = Html::queryNodes($this->xpath(), '//*[@class="refsect1 description"]//a[@class="function"]/@href', null, true);
        if ($elements->length > 0) {
            $aliasedFile = $elements->item(0)->nodeValue;
            if ($aliasedFile) {
                $this->aliasedMethod = new PhpFunction($aliasedFile);
                $this->aliasedMethod->getName(); // init
            }
        }
        // XXX method alias
        // if ($elements->length === 0) {
        //     $elements = Html::queryNodes($this->xpath(), '//*[@class="refsect1 description"]//a[@class="methodname"]/@href', null, true);
        // }
    }

    private function initAlias(): void {
        Log::debug("Alias function from file '$this->file'");
        if ($this->aliasedMethod) {
            $this->parameters = $this->aliasedMethod->getParameters();
            $this->type = $this->aliasedMethod->getType();
        }
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
            $attribute = Html::queryFirstValue($this->xpath(), '*[@class="attribute"]', $param, true);
            $type = Html::queryFirstValue($this->xpath(), '*[@class="type"]', $param);
            if ($type === "?") {
                // e.g. function.apache-note.html
                // <span class="type">?</span><span class="type"><span class="type">string</span><span class="type"></span></span>
                $type = implode("", Html::queryValues($this->xpath(), '*[@class="type"]', $param));
            }
            $reference = false;
            $name = Html::querySingleValue($this->xpath(), '*[@class="parameter"]', $param, true);
            if (!$name) {
                $reference = true;
                $name = Html::querySingleValue($this->xpath(), '*[@class="parameter reference"]', $param);
                $name = substr($name, 1);
            }
            $initializer = Html::querySingleValue($this->xpath(), '*[@class="initializer"]', $param, true);
            if ($initializer === null) {
                // #25
                // we can remove this part when the value is surrounded with <span class="initializer"></span>
                if (Strings::endsWith(trim($param->nodeValue), ' = ?')) {
                    $initializer = ' = ?';
                }
            }
            if ($initializer) {
                $initializer = Php::sanitizeInitializer($initializer, $type);
            }
            $optional = $hasOptionalParam && in_array($paramIndex, $optionalParamIndexes);
            $this->parameters->addParameter((new PhpParameter())
                ->setAttribute($attribute)
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
        $parenEnd = strrpos($methodSynopsis, ')');
        $params = substr($methodSynopsis, $parenStart + 1, $parenEnd - ($parenStart + 1));
        $length = strlen($params);
        $bracketBalance = 0;
        $paramIndex = 0;
        $inAttribute = false;
        $bracketBalanceInAttribute = 0;
        for ($index = 0; $index < $length; $index++) {
            $c = $params[$index];
            switch ($c) {
                case '#':
                    // e.g. myfunc(#[\Attr] $param1)
                    if ($params[$index + 1] === '[') {
                        $inAttribute = true;
                        $bracketBalanceInAttribute++;
                        $index++;
                    }
                    break;
                case '[':
                    if ($inAttribute) {
                        $bracketBalanceInAttribute++;
                    } else {
                        // the first parameter may be optional
                        // e.g. myfunc([mixed $array])
                        $bracketBalance++;
                        $index++;
                        // e.g. myfunc($param1 [, mixed $value])
                        if ($params[$index] === ',') {
                            $paramIndex++;
                        }
                        $indexes[] = $paramIndex;
                    }
                    break;
                case ']':
                    if ($inAttribute) {
                        $bracketBalanceInAttribute--;
                        if ($bracketBalanceInAttribute === 0) {
                            $inAttribute = false;
                        }
                    } else {
                        $bracketBalance--;
                    }
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

    protected function detectMethodNode(): ?DOMNode {
        $nodes = Html::queryNodes($this->xpath(), '//div[@class="methodsynopsis dc-description"]', null, true);
        if ($nodes->length === 0) {
            $nodes = Html::queryNodes($this->xpath(), '//div[@class="constructorsynopsis dc-description"]', null, true);
        }
        if ($nodes->length === 0) {
            // e.g. phar.destruct.html
            $nodes = Html::queryNodes($this->xpath(), '//div[@class="destructorsynopsis dc-description"]', null, false);
        }
        if ($nodes->length === 1) {
            return $nodes->item(0);
        }
        $index = SourceDocFixer::methodNodeIndex($this->name);
        if ($index !== null) {
            return $nodes->item($index);
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
        $out .= $this->signatureParameters();
        $out .= $this->signatureReturnType();
        $out .= $this->signatureMethodBody() . NEW_LINE;
        return $out;
    }

    private function signatureRegular(bool $withPhpDoc, int $indent): string {
        $phpDoc = $withPhpDoc ? $this->phpDoc($indent) : '';
        $out = $this->signatureModifiers();
        $out .= 'function ';
        $out .= $this->name->getName();
        $out .= $this->signatureParameters();
        $out .= $this->signatureReturnType();
        $out .= $this->signatureMethodBody();
        return $phpDoc . Strings::indent($indent, $out);
    }

    protected function signatureModifiers(): string {
        $out = implode(' ', Php::sanitizeMethodModifiers($this->modifiers, $this->name->getName()));
        return $out ? $out . ' ' : '';
    }

    private function signatureParameters(): string {
        $out = '(';
        $first = true;
        if ($this->parameters) {
            /* @var $parameter PhpParameter */
            foreach ($this->parameters->getParameters() as $parameter) {
                if ($first) {
                    $first = false;
                } else {
                    $out .= ', ';
                }
                if ($parameter->getAttribute()) {
                    $out .= $parameter->getAttribute() . ' ';
                }
                if ($parameter->getType()) {
                    $parameterType = Php::sanitizeType($parameter->getType());
                    if ($parameterType) {
                        $out .= $parameterType . ' ';
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
        }
        $out .= ')';
        return $out;
    }

    private function signatureReturnType(): string {
        $out = '';
        if (!in_array($this->name->getName(), self::NO_RETURN_TYPE_METHODS)) {
            $type = Php::sanitizeType($this->type);
            if ($type) {
                $out .= ': ' . $type;
            }
        }
        return $out;
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
                $errorType = SourceDocFixer::getDocErrorType($this->file, $this->name);
                if ($errorType !== null) {
                    return $errorType;
                }
                Log::error("Unknown type for function '{$this->name->getName()}' in file '$this->file'", true);
        }
        return 'mixed';
    }

}
