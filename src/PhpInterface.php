<?php

use utils\Log;
use utils\Strings;

class PhpInterface extends PhpType {

    protected function createPhpMethod(string $file, PhpName $name): PhpMethod {
        return new class($file, $name) extends PhpMethod {

            protected function signatureMethodBody(): string {
                return ';';
            }

            protected function signatureModifiers(): string {
                $this->modifiers = array_diff($this->modifiers, ['abstract']);
                return parent::signatureModifiers();
            }

        };
    }

    protected function signatureInternal(bool $withPhpDoc, int $indent = 0): ?string {
        $out = $withPhpDoc ? $this->phpDoc->asType($indent) : '';
        $out .= Strings::indent($indent, '', false);
        $out .= 'interface ';
        $out .= $this->name->getName();
        $first = true;
        foreach ($this->extends as $extends) {
            if ($first) {
                $out .= ' extends ';
                $first = false;
            } else {
                $out .= ', ';
            }
            $out .= $extends;
        }
        $out .= ' {' . NEW_LINE;
        foreach ($this->fields->getFields() as $field) {
            if (!$field->isConstant()) {
                Log::error("Unexpected non-constant '{$field->getName()}' for interface in file '$this->file'");
                continue;
            }
            $out .= NEW_LINE;
            $fieldPhpDoc = $field->getPhpDoc()->setField($field)->asField($indent + 1);
            if ($fieldPhpDoc) {
                $out .= $fieldPhpDoc;
            }
            $out .= Strings::indent($indent + 1, '', false);
            if (count($field->getModifiers())) {
                $out .= implode(' ', $field->getModifiers());
                $out .= ' ';
            }
            $out .= $field->getName();
            if ($field->getInitializer() !== null) {
                $out .= ' ' . $field->getInitializer();
            } else {
                Log::info("No initializer for constant '{$field->getName()}', assuming 'null' in file '$this->file'");
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

}
