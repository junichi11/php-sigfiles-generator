<?php

use utils\Php;

class PhpParameter {

    /** @var string */
    private $type;
    /** @var string */
    private $name;
    /** @var string */
    private $initializer;
    /** @var string */
    private $phpDoc;
    /** @var bool */
    private $reference;
    /** @var bool */
    private $optional;

    public function getType(): ?string {
        return $this->type;
    }

    public function setType(string $type): PhpParameter {
        $this->type = $type;
        return $this;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(string $name): PhpParameter {
        $this->name = Php::sanitizeParamName($name);
        return $this;
    }

    public function getInitializer(): ?string {
        return $this->initializer;
    }

    public function setInitializer(?string $initializer): PhpParameter {
        $this->initializer = $initializer;
        return $this;
    }

    public function getPhpDoc(): ?string {
        return $this->phpDoc;
    }

    public function setPhpDoc(string $phpDoc): PhpParameter {
        $this->phpDoc = $phpDoc;
        return $this;
    }

    public function isReference(): bool {
        return $this->reference;
    }

    public function setReference(bool $reference): PhpParameter {
        $this->reference = $reference;
        return $this;
    }

    public function isOptional(): bool {
        return $this->optional;
    }

    public function setOptional(bool $optional): PhpParameter {
        $this->optional = $optional;
        return $this;
    }

    public static function sanitizeName(string $name): string {
        return $name;
    }

}
