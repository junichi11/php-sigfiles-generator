<?php

use utils\Strings;

class PhpConstant extends SigFileElement {

    /** @var PhpDoc */
    private $phpDoc;

    public function __construct(string $file, PhpName $name, PhpDoc $phpDoc) {
        parent::__construct($file, $name);
        $this->phpDoc = $phpDoc;
    }

    protected function signatureInternal(bool $withPhpDoc, int $indent = 0): ?string {
        $out = '';
        // XXX namespace constants
        $constant = $this->name->getName();
        if ($withPhpDoc) {
            $out .= $this->phpDoc->asConstant($constant);
        }
        $value = null;
        if (defined($constant)) {
            $value = constant($constant);
            if ($value === null) {
                $value = 'null';
            } elseif ($value === true) {
                $value = 'true';
            } elseif ($value === false) {
                $value = 'false';
            } elseif (!is_numeric($value)) {
                $value = "'$value'";
            }
        } else {
            $value = 'null';
        }
        $out .= Strings::indent($indent, "define('$constant', $value);");
        return $out;
    }

    protected function initInternal(): void {
        // noop
    }

}
