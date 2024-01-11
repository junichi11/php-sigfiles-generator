<?php

use utils\Html;
use utils\Strings;

class PhpClass extends PhpType {

    /** @var string[] */
    private $implements = [];

    protected function createPhpMethod(string $file, PhpName $name): PhpMethod {
        return new PhpMethod($file, $name);
    }

    protected function signatureInternal(bool $withPhpDoc, int $indent = 0): ?string {
        $out = $withPhpDoc ? $this->phpDoc->asType($indent) : '';
        $out .= Strings::indent($indent, '', false);
        if (count($this->modifiers)) {
            $out .= implode(' ', $this->modifiers);
            $out .= ' ';
        }
        if (!in_array('class', $this->modifiers, true)) {
            $out .= 'class ';
        }
        $out .= $this->name->getName();
        $supertypePrefix = PhpName::DEFAULT_NAMESPACE;
        $first = true;
        foreach ($this->extends as $extends) {
            if ($first) {
                $out .= ' extends ';
                $first = false;
            } else {
                $out .= ', ';
            }
            $out .= $supertypePrefix . $extends;
        }
        $first = true;
        foreach ($this->implements as $implements) {
            if ($first) {
                $out .= ' implements ';
                $first = false;
            } else {
                $out .= ', ';
            }
            $out .= $supertypePrefix . $implements;
        }
        $out .= ' {' . NEW_LINE;
        foreach ($this->fields->getFields() as $field) {
            $out .= NEW_LINE;
            $phpDoc = $field->getPhpDoc();
            if ($phpDoc) {
                $fieldPhpDoc = $phpDoc->setField($field)->asField($indent + 1);
                if ($fieldPhpDoc) {
                    $out .= $fieldPhpDoc;
                }
            }
            $out .= Strings::indent($indent + 1, '', false);
            if (count($field->getModifiers())) {
                $out .= implode(' ', $field->getModifiers());
                $out .= ' ';
            }
            $out .= $field->getName();
            if ($field->getInitializer() !== null) {
                $out .= ' ' . $field->getInitializer();
            } elseif ($field->isConstant()) {
                // constant must have value
                $out .= ' = null';
            }
            $out .= ';' . NEW_LINE;
        }
        foreach ($this->methods as $method) {
            $out .= NEW_LINE;
            $out .= $method->signature(true, $indent + 1);
        }
        $out .= Strings::indent($indent, '}');
        return $out;
    }

    protected function initInternal(): void {
        parent::initInternal();
        $this->implements = Html::queryValues($this->xpath(), './/div[@class="classsynopsisinfo"]//a[@class="interfacename"]', $this->typeInfo, true);
    }

}
