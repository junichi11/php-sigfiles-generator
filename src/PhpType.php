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
        $this->initConstants();
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
                $field->setInitializer(Php::sanitizeInitializer($initializer, $type));
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

    private function initConstants(): void {
        // to add constants, find name.constants.html
        $name = $this->name->getName();
        $typeName = PhpFileMapper::map(strtolower($name));
        $fileName = strtolower($typeName) . '.constants.html';

        // find
        $file = null;
        try {
            $file = Files::findFile($fileName);
        } catch (RuntimeException $exception) {
            Log::debug($exception->getMessage());
        }
        if (!$file) {
            return;
        }
        Log::debug($name . " has constants.html $file");
        $constantPhpDoc = (new PhpDoc(Html::xpath($file)))
                ->parseConstants(PhpConstants::getConstantsName($file), false, true);
        $constants = $constantPhpDoc->getConstantNames();
        if (!count($constants)) {
            Log::debug("No constants found in file '$file'");
        }

        // add
        $this->addConstants($constants, $constantPhpDoc);
        PhpConstants::addCollectedConstantFile($file);
    }

    private function addConstants(array $constants, PhpDoc $constantPhpDoc): void {
        $extensionClasses = [];
        foreach ($constants as $constant) {
            if (Config::get()->isBlacklistConstant($constant)) {
                Log::debug("Constant '$constant' is blacklisted");
                continue;
            }
            // default namespace constants are added in PhpConstants
            if (Strings::contains($constant, '::')) {
                $arr = explode('::', $constant);
                $className = $arr[0];
                $constName = $arr[1];
                if (strcasecmp($className, $this->getName()->getName()) !== 0) {
                    continue;
                }
                $classExists = class_exists($className, false);
                if (!$classExists && !in_array($className, $extensionClasses)) {
                    $extensionClasses[] = $className;
                    Log::info("$className class does not exist. Maybe the extension is needed to get constant values.");
                }
                $initializer = $classExists && defined($constant) ? constant($constant) : null;
                $constType = $constantPhpDoc->getConstantType($constant);
                if ($constType === null && $initializer !== null) {
                    $constType = gettype($initializer);
                }
                if ($initializer !== null) {
                    if ($constType !== null) {
                        $initializer = Php::sanitizeInitializer($initializer, $constType);
                    } else {
                        $initializer = '= ' . $initializer;
                    }
                }
                $field = new PhpField();
                $field->setConstant(true)
                        ->addModifier('const')
                        ->setName($constName)
                        ->setInitializer($initializer)
                        ->setType($constType ?: 'mixed')
                        ->setExtraConstantKey($constant)
                        ->setPhpDoc($constantPhpDoc);
                $this->fields->addField($field);
                continue;
            }
            if (Strings::contains($constant, PhpName::NAMESPACE_SEPARATOR)) {
                // currently, there is no this case
                Log::info("Skipping namespace constant '$constant'");
                continue;
            }
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
