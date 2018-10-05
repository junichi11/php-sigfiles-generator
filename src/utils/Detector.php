<?php

namespace utils;

use PhpName;

class Detector {

    /** @var \DOMXPath */
    private $xpath;
    /** @var PhpName[] */
    private $functions = [];
    /** @var string[] */
    private $methods = [];

    public function __construct(\DOMXPath $xpath) {
        $this->xpath = $xpath;
    }

    /** @return PhpName[] */
    public function getFunctions(): array {
        return $this->functions;
    }

    /** @return PhpName[] */
    public function getMethods(): array {
        return $this->methods;
    }

    public function detectMethodsFunctions(): void {
        foreach (Html::queryNodes($this->xpath, '//h1[@class="refname"]') as $h1) {
            $name = trim($h1->nodeValue);
            $nameParts = explode('::', $name);
            if (count($nameParts) == 1) {
                // function
                $this->functions[] = PhpName::fromString($nameParts[0]);
            } elseif (count($nameParts) == 2) {
                if (!Strings::startsWith($nameParts[1], '$')) {
                    $this->methods[] = PhpName::fromString($nameParts[1], false);
                }
            } else {
                Log::error("Unexpected name '$name' in file '{$this->getFile()}'");
            }
        }
    }

    private function getFile(): string {
        return $this->xpath->document->documentURI;
    }

}
