<?php

use utils\Detector;
use utils\Files;
use utils\Html;
use utils\Log;
use utils\Php;
use utils\SourceDocFixer;
use utils\Strings;

abstract class PhpType extends SigFileElement {

    /** @var string[] */
    protected $modifiers = [];
    /** @var string[] */
    protected $extends = [];
    /** @var PhpFields */
    protected $fields;
    /** @var PhpMethod[] */
    protected $methods = [];
    /** @var PhpDoc */
    protected $phpDoc;
    /** @var DOMNode */
    protected $typeInfo;
    /** @var PhpFunction[] */
    protected $relatedFunctions = [];
    /** @var PhpDoc */
    protected $allConstantsPhpDoc;

    protected abstract function createPhpMethod(string $file, PhpName $name): PhpMethod;

    public function getName(): PhpName {
        return $this->name;
    }

    /** @return PhpMethod[] */
    public function getRelatedFunctions(): array {
        $this->init();
        return $this->relatedFunctions;
    }

    /** @return PhpDoc */
    public function getAllConstantsPhpDoc(): PhpDoc {
        return $this->allConstantsPhpDoc;
    }

    protected function initInternal(): void {
        $this->phpDoc = (new PhpDoc($this->xpath()))
            ->parseType($this->name->asHtmlIdent());
        $this->typeInfo= Html::querySingleNode($this->xpath(), '//div[@class="classsynopsis"]');
        $this->modifiers = array_unique(Html::queryValues($this->xpath(), './/div[@class="classsynopsisinfo"]//strong[@class="classname"]//preceding::span[@class="modifier"]', $this->typeInfo, true));
        $this->extends = Html::queryValues($this->xpath(), './/span[@class="ooclass"]//a', $this->typeInfo, true);
        $this->initFields();
        $this->initMethods();
    }

    private function initFields(): void {
        $this->fields = new PhpFields();
        $fieldNodes = Html::queryNodes($this->xpath(), './/div[@class="fieldsynopsis"]', $this->typeInfo, true);
        $htmlIdent = $this->name->asHtmlIdent();
        $fixedHtmlIdent = SourceDocFixer::getHtmlIdentForFields($htmlIdent);
        if ($fixedHtmlIdent !== null) {
            $htmlIdent = $fixedHtmlIdent;
        }
        $constantsPhpDoc = (new PhpDoc($this->xpath()))
            ->parseConstants($htmlIdent, true);
        $this->allConstantsPhpDoc = (new PhpDoc($this->xpath()))
            ->parseConstants($htmlIdent, false);
        foreach ($fieldNodes as $fieldNode) {
            $field = new PhpField();
            $modifiers = Html::queryValues($this->xpath(), './*[@class="modifier"]', $fieldNode, true);
            foreach ($modifiers as $modifier) {
                if ($modifier === 'const') {
                    $field->setConstant(true);
                } elseif ($modifier === 'readonly') {
                    continue;
                }
                $field->addModifier($modifier);
            }
            $type = Html::querySingleValue($this->xpath(), './*[@class="type"]', $fieldNode, true);
            if ($type === null) {
                $type = 'mixed';
            }
            $field->setType($type);
            $name = trim(Html::querySingleNode($this->xpath(), './var', $fieldNode)->nodeValue);
            if (Strings::contains($name, '::')) {
                continue;
            }
            if (!$field->isConstant()) {
                $name = Php::sanitizeParamName($name);
            }
            $field->setName($name);
            $initializer = Html::querySingleValue($this->xpath(), './*[@class="initializer"]', $fieldNode, true);
            if ($initializer) {
                $field->setInitializer(php::sanitizeInitializer($initializer, $type));
            }
            if ($field->isConstant()) {
                $docLink = Html::querySingleNode($this->xpath(), './var[@class="fieldsynopsis_varname"]/a', $fieldNode, true);
                if ($docLink !== null) {
                    $docUrl = $docLink->attributes->getNamedItem('href')->nodeValue;
                    if (!Strings::startsWith($docUrl, basename($this->file) . '#')) {
                        // inherited constant => ignore it
                        continue;
                    }
                }
                $field->setPhpDoc($constantsPhpDoc);
            } else {
                $docLink = Html::querySingleNode($this->xpath(), './var[@class="varname"]/a', $fieldNode, true);
                if ($docLink !== null) {
                    $docUrl = $docLink->attributes->getNamedItem('href')->nodeValue;
                    $field->setProperty(Strings::contains($docUrl, '#'));
                    $this->addMethods($docUrl);
                    $field->setPhpDoc((new PhpDoc(Html::xpath(Files::findFile($docUrl)), $docUrl))
                        ->parseField($field));
                }
            }
            $this->fields->addField($field);
        }
    }

    private function initMethods(): void {
        // methods from class
        $methodNodes = Html::queryNodes($this->xpath(), '//a[@class="methodname"]', $this->typeInfo, true);
        foreach ($methodNodes as $methodNode) {
            $file = $methodNode->attributes->getNamedItem('href')->nodeValue;
            $this->addMethods($file);
        }
        // methods below class
        $elements = $this->xpath()->query('//ul[@class="chunklist chunklist_reference"]//a[starts-with(@href, "' . $this->name->getName() . '.")]');
        foreach ($elements as $element) {
            $elementValue = $element->nodeValue;
            $nameParts = explode('::', $elementValue);
            if (count($nameParts) != 2) {
                Log::error("Expected class member but got '$elementValue' in '$this->file'");
                continue;
            }
            $name = $nameParts[1];
            if (Strings::startsWith($name, '$')) {
                if ($this->fields->getField($name) === null) {
                    Log::error("Unprocessed field '$name' in '$this->file'");
                }
                continue;
            }
            $file = $element->attributes->getNamedItem('href')->nodeValue;
            $this->addMethods($file);
        }
        ksort($this->methods);
    }

    protected function addMethods(string $file): void {
        if (Strings::contains($file, '#')) {
            Log::debug("Internal URL ignored for field in file '$this->file'");
            return;
        }
        $detector = new Detector(Html::xpath(Files::findFile($file)));
        $detector->detectMethodsFunctions();
        foreach ($detector->getFunctions() as $name) {
            $this->addFunction($name, $file);
        }
        foreach ($detector->getMethods() as $name) {
            $this->addMethod($name, $file);
        }
    }

    private function addFunction(PhpName $name, string $file): void {
        if (array_key_exists($name->getName(), $this->relatedFunctions)) {
            return;
        }
        $this->relatedFunctions[$name->getName()] = new PhpFunction($file, $name);
    }

    private function addMethod(PhpName $name, string $file): void {
        if (array_key_exists($name->getName(), $this->methods)) {
            return;
        }
        $this->methods[$name->getName()] = $this->createPhpMethod($file, $name);
    }

}
