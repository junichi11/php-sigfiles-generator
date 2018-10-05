<?php

use utils\Php;

final class PhpFields {

    /** @var PhpField[] */
    private $fields = [];

    public function addField(PhpField $field): void {
        $this->fields[$field->getName()] = $field;
    }

    public function getField(string $name): ?PhpField {
        $name = Php::sanitizeParamName($name);
        if (array_key_exists($name, $this->fields)) {
            return $this->fields[$name];
        }
        return null;
    }

    /** @return PhpField[] */
    public function getFields(): array {
        return $this->fields;
    }

}
