<?php

use utils\Html;
use utils\Log;
use utils\Php;
use utils\SourceDocFixer;
use utils\Strings;

final class PhpDoc {

    /** @var DOMXPath */
    private $xpath;
    /** @var string */
    private $url;
    /** @var PhpName */
    private $name;
    /** @var string[] */
    private $intro = [];
    /** @var string[] */
    private $description = [];
    /** @var string */
    private $return;
    /** @var string */
    private $link;
    /** @var string[] */
    private $see = [];
    /** @var string */
    private $since;
    /** @var string */
    private $type;
    /** @var PhpParameters */
    private $parameters;
    // XXX PhpName as keys?
    /** @var string[] */
    private $constants = [];
    /** @var string[] */
    private $properties = [];
    /** @var PhpField */
    private $field;

    public function __construct(DOMXPath $xpath, string $url = null) {
        $this->xpath = $xpath;
        $this->link = $this->getPhpdocLink(Config::get()->phpDocUrl(), $url ?: $this->getFile());
    }

    public function getConstantNames(): array {
        return array_keys($this->constants);
    }

    public function setField(PhpField $field): PhpDoc {
        $this->field = $field;
        return $this;
    }

    public function parseType(string $typeName): PhpDoc {
        return $this->parseIntro($typeName)
            ->parseSince();
    }

    public function parseFunctionAlias(): PhpDoc {
        return $this->parseDescription();
    }

    public function parseFunction(string $type, PhpParameters $parameters): PhpDoc {
        $this->type = $type;
        $this->parameters = $parameters;
        return $this->parseDescription()
            ->parseParameters()
            ->parseReturn()
            ->parseSee()
            ->parseSince();
    }

    public function parseField(PhpField $field): PhpDoc {
        $this->field = $field;
        if ($field->isProperty()) {
            return $this->parseProperties();
        }
        return $this->parseDescription()
            ->parseReturn()
            ->parseSee()
            ->parseSince();
    }

    public function parseConstants(string $element, bool $sanitizeClassConstants, bool $includingDocTable = false): PhpDoc {
        if ($includingDocTable) {
            $rows = Html::queryNodes($this->xpath, '//table[@class="doctable table"]/tbody/tr', null, true);
            foreach ($rows as $row) {
                $columns = Html::queryNodes($this->xpath, './td[not(@class="empty")]', $row, false);
                $name = Php::sanitizeConstantName(trim($columns->item(0)->nodeValue), $sanitizeClassConstants);
                $this->constants[$name] = $this->nodeHtml($columns->item($columns->length - 1));
            }
        }
        $nodes = Html::queryNodes($this->xpath, '//*[contains(@id, "' . strtolower($element) . '.constants")]//dl', null, true);
        if ($nodes->length === 0) {
            $nodes = Html::queryNodes($this->xpath, '//*[@id="' . strtolower($element) . '.constants.types"]//dl', null, true);
        }
        if ($nodes->length === 0) {
            // e.g. class.mongocollection.html
            $node = Html::queryFirstNode($this->xpath, '//dl/dt[contains(@id, ".constants")]', null, true);
            if ($node !== null) {
                $nodes = [$node->parentNode];
            }
        }
        $names = [];
        foreach ($nodes as $node) {
            foreach ($node->childNodes as $childNode) {
                switch ($childNode->nodeName) {
                    case 'dt':
                        $name = Php::sanitizeConstantName(trim($childNode->nodeValue), $sanitizeClassConstants);
                        $this->constants[$name] = '';
                        $names[] = $name;
                        break;
                    case 'dd':
                        foreach ($names as $name) {
                            $this->constants[$name] = $this->nodeHtml($childNode);
                        }
                        $names = [];
                }
            }
        }
        return $this;
    }

    public function asType(int $indent = 0): string {
        $out = Strings::indent($indent, '/**');
        foreach ($this->intro as $intro) {
            $out .= Strings::indent($indent, ' * ' . $intro);
        }
        $out .= Strings::indent($indent, ' * @link ' . $this->link);
        $out .= Strings::indent($indent, ' * @since ' . $this->since);
        $out .= Strings::indent($indent, ' */');
        return $out;
    }

    public function asFunctionAlias(int $indent = 0): string {
        $out = Strings::indent($indent, '/**');
        foreach ($this->description as $description) {
            $out .= Strings::indent($indent, ' * ' . $description);
        }
        $out .= Strings::indent($indent, ' * @link ' . $this->link);
        $out .= Strings::indent($indent, ' */');
        return $out;
    }

    public function asFunction(int $indent = 0): string {
        $out = Strings::indent($indent, '/**');
        foreach ($this->description as $description) {
            $out .= Strings::indent($indent, ' * ' . $description);
        }
        foreach ($this->parameters->getParameters() as $parameter) {
            $out .= Strings::indent($indent, ' * @param ' . trim(Php::sanitizeType($parameter->getType(), true) . ' ' . $parameter->getName() . ' ' . $parameter->getPhpDoc()));
        }
        $out .= Strings::indent($indent, ' * @return ' . trim($this->requiredType() . ' ' . $this->return));
        $out .= Strings::indent($indent, ' * @link ' . $this->link);
        if (count($this->see)) {
            $out .= Strings::indent($indent, ' * @see ' . implode(', ', $this->see));
        }
        $out .= Strings::indent($indent, ' * @since ' . $this->since);
        $out .= Strings::indent($indent, ' */');
        return $out;
    }

    public function asConstant(string $constant, int $indent = 0): ?string {
        if (!array_key_exists($constant, $this->constants)) {
            Log::error("Constant $constant not found in file '{$this->getFile()}'");
            return '';
        }
        $phpDoc = $this->constants[$constant];
        if (!$phpDoc) {
            return '';
        }
        $out = '';
        $out .= Strings::indent($indent, '/**');
        $out .= Strings::indent($indent, ' * ' . $phpDoc);
        $out .= Strings::indent($indent, ' */');
        return $out;
    }

    public function asField(int $indent = 0): ?string {
        if ($this->field->isConstant()) {
            // constant
            $phpDoc = '';
            if (array_key_exists($this->field->getName(), $this->constants)) {
                $phpDoc = $this->constants[$this->field->getName()];
            } elseif (!SourceDocFixer::isConstantsBrokenFile($this->getFile())) {
                Log::error("Cannot find documentation for constant {$this->field->getName()} in '{$this->getFile()}'");
            }
            $out = Strings::indent($indent, '/**');
            $out .= Strings::indent($indent, ' * @var ' . $this->field->getType() . ($phpDoc ? ' ' . $phpDoc : ''));
            $out .= Strings::indent($indent, ' * @link ' . $this->link);
            $out .= Strings::indent($indent, ' */');
            return $out;
        } elseif ($this->field->isProperty()) {
            // property
            $phpDoc = '';
            if (array_key_exists($this->field->getName(), $this->properties)) {
                $phpDoc = $this->properties[$this->field->getName()];
            } else {
                Log::error("Cannot find documentation for property {$this->field->getName()} in '{$this->getFile()}'");
            }
            $out = Strings::indent($indent, '/**');
            $out .= Strings::indent($indent, ' * @var ' . $this->field->getType() . ($phpDoc ? ' ' . $phpDoc : ''));
            $out .= Strings::indent($indent, ' * @link ' . $this->link);
            $out .= Strings::indent($indent, ' */');
            return $out;
        }
        // field/function
        $out = Strings::indent($indent, '/**');
        foreach ($this->description as $description) {
            $out .= Strings::indent($indent, ' * ' . $description);
        }
        $out .= Strings::indent($indent, ' * @var ' . trim($this->requiredType() . ' ' . $this->return));
        $out .= Strings::indent($indent, ' * @link ' . $this->link);
        if (count($this->see)) {
            $out .= Strings::indent($indent, ' * @see ' . implode(', ', $this->see));
        }
        $out .= Strings::indent($indent, ' * @since ' . $this->since);
        $out .= Strings::indent($indent, ' */');
        return $out;
    }

    private function parseIntro(string $className): PhpDoc {
        $introNodes = Html::queryNodes($this->xpath, '//*[@id="' . $className . '.intro"]//p', null, true);
        foreach ($introNodes as $introNode) {
            $intro = $this->nodeHtml($introNode);
            if ($intro) {
                $this->intro[] = $intro;
            }
        }
        return $this;
    }

    private function parseDescription(): PhpDoc {
        $refname = Html::querySingleNode($this->xpath, '//*[@class="refnamediv"]');
        $this->description[] = Php::sanitizeHtml(Html::querySingleValue($this->xpath, './/*[@class="dc-title"]', $refname));
        $description = null;
        if (SourceDocFixer::isHtmlDescriptionError($this->getFile())) {
            Log::warn("Using another lookup method for description to bypass errors in HTML page for '{$this->getFile()}'");
            $description = Html::queryFirstNode($this->xpath, '//*[@class="refsect1 description"]');
        } else {
            $description = Html::querySingleNode($this->xpath, '//*[@class="refsect1 description"]');
        }
        // more info
        $newDoc = new DOMDocument();
        $comments = Html::queryNodes($this->xpath, './/p', $description, true);
        foreach ($comments as $comment) {
            if (SourceDocFixer::isInvalidComment($comment->nodeValue)) {
                continue;
            }
            $this->importNode($newDoc, $comment);
        }
        if ($newDoc->hasChildNodes()) {
            $html = Php::sanitizeHtml($newDoc->saveHTML());
            if ($html) {
                $this->description[] = $html;
            }
        }
        return $this;
    }

    private function parseProperties(): PhpDoc {
        $nodes = Html::queryNodes($this->xpath, '//div[contains(@id, ".props")]//dl', null, true);
        if ($nodes->length === 0) {
            $nodes = Html::queryNodes($this->xpath, '//div[contains(@id, ".fields")]//dl', null, true);
        }
        if ($nodes->length === 0) {
            // e.g. class.mongocollection.html
            $node = Html::queryFirstNode($this->xpath, '//dl/dt[contains(@id, ".props")]', null, true);
            if ($node !== null) {
                $nodes = [$node->parentNode];
            }
        }
        $name = null;
        foreach ($nodes as $node) {
            foreach ($node->childNodes as $childNode) {
                switch ($childNode->nodeName) {
                    case 'dt':
                        $name = Php::sanitizePropertyName(trim($childNode->nodeValue));
                        $this->properties[$name] = '';
                        break;
                    case 'dd':
                        $this->properties[$name] = $this->nodeHtml($childNode);
                        $name = null;
                }
            }
        }
        return $this;
    }

    private function parseParameters(): PhpDoc {
        $params = Html::querySingleNode($this->xpath, '//*[@class="refsect1 parameters"]/dl', null, true);
        if ($params != null) {
            $param = null;
            foreach ($params->childNodes as $node) {
                if ($node->nodeName === 'dt') {
                    $param = Php::sanitizeParamName(trim($node->nodeValue));
                } elseif ($node->nodeName === 'dd') {
                    $newDoc = new DOMDocument();
                    foreach ($node->childNodes as $child) {
                        $newDoc->appendChild($newDoc->importNode($child, true));
                    }
                    $parameter = $this->parameters->getParameter($param);
                    if ($parameter !== null) {
                        // different set of parameters, see e.g. function.apc-add.html
                        $parameter->setPhpDoc(Php::sanitizeHtml($newDoc->saveHTML(), true));
                    }
                }
            }
        }
        return $this;
    }

    private function parseReturn(): PhpDoc {
        $return = Html::querySingleNode($this->xpath, '//*[@class="refsect1 returnvalues"]', null, true);
        if ($return === null) {
            return $this;
        }
        $newDoc = new DOMDocument();
        foreach ($return->childNodes as $child) {
            if ($child->nodeName === 'h3') {
                continue;
            }
            if (!trim($child->nodeValue)) {
                continue;
            }
            $newDoc->appendChild($newDoc->importNode($child, true));
        }
        $this->return = Php::sanitizeHtml($newDoc->saveHTML());
        return $this;
    }

    private function parseSee(): PhpDoc {
        $nodes = Html::queryNodes($this->xpath, '//*[@class="refsect1 seealso"]//ul[@class="simplelist"]//a[@class="function"]', null, true);
        if ($nodes->length > 0) {
            foreach ($nodes as $node) {
                $this->see[] = $node->nodeValue;
            }
        }
        return $this;
    }

    private function parseSince(): PhpDoc {
        $since = Html::querySingleValue($this->xpath, '//*[@class="verinfo"]');
        if (Strings::startsWith($since, '(')) {
            $since = substr($since, 1);
        }
        if (Strings::endsWith($since, ')')) {
            $since = substr($since, 0, -1);
        }
        $this->since = $since;
        return $this;
    }

    private function getPhpdocLink(string $phpDocUrl, string $file): string {
        return $phpDocUrl . basename(str_replace('.html', '.php', $file));
    }

    private function nodeHtml(?DOMNode $node, bool $deep = true): string {
        $newDoc = new DOMDocument();
        $this->importNode($newDoc, $node, $deep);
        return Php::sanitizeHtml($newDoc->saveHTML());
    }

    private function nodesHtml(?DOMNodeList $nodes, bool $deep = true): string {
        $newDoc = new DOMDocument();
        $this->importNodes($newDoc, $nodes, $deep);
        return Php::sanitizeHtml($newDoc->saveHTML());
    }

    private function importNode(DOMDocument $document, ?DOMNode $node, bool $deep = true): void {
        if ($node !== null) {
            $document->appendChild($document->importNode($node, $deep));
        }
    }

    private function importNodes(DOMDocument $document, DOMNodeList $nodes, bool $deep = true): void {
        foreach ($nodes as $node) {
            $this->importNode($document, $node, $deep);
        }
    }

    private function getFile(): string {
        return $this->xpath->document->documentURI;
    }

    private function requiredType(): string {
        if ($this->type !== null) {
            return $this->type;
        }
        if ($this->field) {
            return $this->field->getType();
        }
        Log::error("Type is expected for file '{$this->getFile()}'");
        return '???';
    }

}
