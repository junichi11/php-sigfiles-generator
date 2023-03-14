<?php

use utils\Files;
use utils\Html;

abstract class SigFileElement
{
    /** @var string */
    protected $file;
    /** @var PhpName */
    protected $name;
    /** @var DOMXPath */
    private $xpath;
    /** @var bool */
    private $inited = false;

    public function __construct(string $file, PhpName $name = null)
    {
        $this->file = Files::findFile($file);
        $this->name = $name;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function getName(): PhpName
    {
        $this->init();
        return $this->name;
    }

    final public function signature(bool $withPhpDoc, int $indent = 0): ?string
    {
        $this->init();
        return $this->signatureInternal($withPhpDoc, $indent);
    }

    final protected function init(): void
    {
        if ($this->inited) {
            return;
        }
        $this->inited = true;
        $this->initInternal();
    }

    abstract protected function signatureInternal(bool $withPhpDoc, int $indent = 0): ?string;

    abstract protected function initInternal(): void;

    protected function xpath(): DOMXPath
    {
        if ($this->xpath === null) {
            $this->xpath = Html::xpath($this->file);
        }
        return $this->xpath;
    }
}
