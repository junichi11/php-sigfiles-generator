<?php

class PhpField {

    /** @var bool */
    private $constant = false;
    /** @var bool */
    private $property = false;
    /** @var string[] */
    private $modifiers = [];
    /** @var string */
    private $type;
    /** @var string */
    private $name;
    /** @var string */
    private $initializer;
    /** @var PhpDoc */
    private $phpDoc;

    public function isConstant(): bool {
        return $this->constant;
    }

    public function setConstant(bool $constant): PhpField {
        $this->constant = $constant;
        return $this;
    }

    public function isProperty(): bool {
        return $this->property;
    }

    public function setProperty(bool $property): void {
        $this->property = $property;
    }

    /** @return string[] */
    public function getModifiers(): array {
        if (!count($this->modifiers)) {
            $this->modifiers = ['public'];
        }
        return $this->modifiers;
    }

    public function addModifier(string $modifier): PhpField {
        $this->modifiers[] = $modifier;
        return $this;
    }

    public function setModifiers(array $modifiers): PhpField {
        $this->modifiers = $modifiers;
        return $this;
    }

    public function getType(): ?string {
        return $this->type;
    }

    public function setType(?string $type): PhpField {
        $this->type = $type;
        return $this;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(string $name): PhpField {
        $this->name = $name;
        return $this;
    }

    public function getInitializer(): ?string {
        return $this->initializer;
    }

    public function setInitializer(?string $initializer): PhpField {
        $this->initializer = $initializer;
        return $this;
    }

    public function getPhpDoc(): ?PhpDoc {
        return $this->phpDoc;
    }

    public function setPhpDoc(PhpDoc $phpDoc): PhpField {
        $this->phpDoc = $phpDoc;
        return $this;
    }

}
