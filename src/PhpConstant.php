<?php

use utils\Strings;

class PhpConstant extends SigFileElement {

    /** @var PhpDoc */
    private $phpDoc;

    public function __construct(string $file, PhpName $name, PhpDoc $phpDoc) {
        parent::__construct($file, $name);
        $this->phpDoc = $phpDoc;
    }

    #[\Override]
    protected function signatureInternal(bool $withPhpDoc, int $indent = 0): ?string {
        $out = '';
        $constantName = $this->name->getName();
        $constant = $constantName;
        if (!$this->name->isInDefaultNamespace()) {
            $constant = $namespace = $this->name->getNamespace() . PhpName::NAMESPACE_SEPARATOR . $constantName;
        }
        if ($withPhpDoc) {
            $out .= $this->phpDoc->asConstant($constant, $indent);
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
        if ($this->name->isInDefaultNamespace()) {
            $out .= Strings::indent($indent, "define('$constantName', $value);");
        } else {
            $out .= Strings::indent($indent, "const $constantName = $value;");
        }
        return $out;
    }

    #[\Override]
    protected function initInternal(): void {
        // noop
    }

}
