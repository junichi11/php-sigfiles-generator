<?php

use utils\Strings;

class PhpInternals {

    private const FILENAME = 'internals';

    public static function collect(): void {
        PhpGenerator::collect(new PhpGeneratorItem(self::FILENAME, self::stdClass()));
    }

    private static function stdClass(): PhpClass {
        return new class() extends PhpClass {

            public function __construct() {
                $this->name = PhpName::fromString('stdClass');
            }

            protected function initInternal(): void {
                // noop
            }

            protected function signatureInternal(bool $withPhpDoc, int $indent = 0): ?string {
                $out = Strings::indent($indent, 'class stdClass {');
                $out .= Strings::indent($indent, '}');
                return $out;
            }

        };
    }

}
