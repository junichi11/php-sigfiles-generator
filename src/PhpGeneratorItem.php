<?php

class PhpGeneratorItem {

    /** @var string */
    private $filename;
    /** @var SigFileElement */
    private $sigFileElement;

    public function __construct(string $filename, SigFileElement $sigFileElement) {
        $this->filename = PhpFileMapper::map($filename);
        $this->sigFileElement = $sigFileElement;
    }

    public function getFilename(): string {
        return $this->filename;
    }

    public function getName(): PhpName {
        return $this->sigFileElement->getName();
    }

    public function getSigFileElement(): SigFileElement {
        return $this->sigFileElement;
    }

    public function isType(): bool {
        return $this->sigFileElement instanceof PhpType;
    }

    public function isFunction(): bool {
        return $this->sigFileElement instanceof PhpFunction;
    }

    public function isConstant(): bool {
        return $this->sigFileElement instanceof PhpConstant;
    }

}
