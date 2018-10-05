<?php

use utils\Php;

final class PhpParameters {

    /** @var PhpParameter[] */
    private $parameters = [];

    public function addParameter(PhpParameter $parameter): void {
        $this->parameters[$parameter->getName()] = $parameter;
    }

    public function getParameter(string $name): ?PhpParameter {
        $name = Php::sanitizeParamName($name);
        if (array_key_exists($name, $this->parameters)) {
            return $this->parameters[$name];
        }
        return null;
    }

    /** @return PhpParameter[] */
    public function getParameters(): array {
        return $this->parameters;
    }

}
