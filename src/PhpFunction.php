<?php

use utils\Html;
use utils\Log;
use utils\Strings;

class PhpFunction extends PhpMethod {

    #[\Override]
    protected function signatureModifiers(): string {
        $this->modifiers = [];
        return parent::signatureModifiers();
    }

    #[\Override]
    protected function initName(): void {
        $name = null;
        foreach (Html::queryNodes($this->xpath(), '//h1[@class="refname"]') as $h1) {
            $name = trim($h1->nodeValue);
            if (!Strings::contains($name, '::')) {
                break;
            }
        }
        if ($name === null) {
            Log::error("Name not found for function in file '$this->file'");
            $name = '???';
        }
        $this->name = PhpName::fromString($name);
    }

    #[\Override]
    protected function isMySignature(string $signature): bool {
        return !Strings::contains($signature, '::');
    }

}
