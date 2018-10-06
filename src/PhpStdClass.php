<?php

class PhpStdClass extends PhpClass {

    private function __construct(string $file, PhpName $name = null) {
        $this->name = PhpName::fromString($file, false);
    }

    public static function create(): PhpClass {
        return new PhpStdClass('stdclass');
    }

    protected function initInternal(): void {
    }

    protected function signatureInternal(bool $withPhpDoc, int $indent = 0): ?string {
        return <<< STDCLASS
class stdClass {
}

STDCLASS;
    }

}
