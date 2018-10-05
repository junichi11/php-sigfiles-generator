<?php

use utils\Files;
use utils\Html;

abstract class PhpElements {

    /** @var string */
    protected $file;
    /** @var DOMXPath */
    private $xpath;

    protected function __construct(string $file) {
        $this->file = Files::findFile($file);
        $this->init();
    }

    protected abstract function init(): void;

    protected function xpath(): DOMXPath {
        if ($this->xpath === null) {
            $this->xpath = Html::xpath($this->file);
        }
        return $this->xpath;
    }

}
