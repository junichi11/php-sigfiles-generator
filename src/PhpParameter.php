<?php

use utils\Php;

class PhpParameter {

    private ?string $attribute;
    private string $type;
    private string $name;
    private ?string $initializer;
    private ?string $phpDoc = null;
    private bool $reference;
    private bool $optional;

    public function getAttribute(): ?string {
        return $this->attribute;
    }

    public function setAttribute(?string $attribute): PhpParameter {
        $this->attribute = $attribute;
        return $this;
    }

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
