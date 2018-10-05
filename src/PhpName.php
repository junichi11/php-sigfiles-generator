<?php

use utils\Log;
use utils\Php;
use utils\SourceDocFixer;

class PhpName {

    const DEFAULT_NAMESPACE = '\\';
    const NAMESPACE_SEPARATOR = '\\';

    /** @var string */
    private $name;
    /** @var string */
    private $namespace;
    /** @var bool */
    private $inNamespace;

    private function __construct(string $name, ?string $namespace, bool $inNamespace) {
        $this->name = $name;
        $this->namespace = $namespace;
        $this->inNamespace = $inNamespace;
    }

    public static function fromString(string $name, bool $inNamespace = true): PhpName {
        $pureName = null;
        $namespace = null;
        $namespaceSeparator = strrpos($name, self::DEFAULT_NAMESPACE);
        if (!$inNamespace) {
            if ($namespaceSeparator !== false) {
                Log::error("Unexpected namespace separator in name '$name'");
            }
            $pureName = $name;
        } else {
            if ($namespaceSeparator != false) {
                $pureName = substr($name, $namespaceSeparator + 1);
                $namespace = substr($name, 0, $namespaceSeparator);
            } else {
                $pureName = $name;
                $namespace = self::DEFAULT_NAMESPACE;
            }
        }
        return new PhpName($pureName, $namespace, $inNamespace);
    }

    public function getName(): string {
        return Php::sanitizeName($this->name);
    }

    public function getNamespace(): string {
        $this->checkInNamespace();
        return $this->namespace;
    }

    public function getFilename(): ?string {
        $this->checkInNamespace();
        if ($this->isInDefaultNamespace()) {
            return null;
        }
        $index = strpos($this->namespace, self::NAMESPACE_SEPARATOR);
        return strtolower(substr($this->namespace, 0, $index ?: strlen($this->namespace)));
    }

    public function isInNamespace(): bool {
        return $this->inNamespace;
    }

    public function isInDefaultNamespace(): bool {
        $this->checkInNamespace();
        return $this->namespace === self::DEFAULT_NAMESPACE;
    }

    public function asString() {
        if (!$this->inNamespace || $this->isInDefaultNamespace()) {
            return $this->name;
        }
        return $this->namespace . self::NAMESPACE_SEPARATOR . $this->name;
    }

    public function asHtmlIdent(bool $nameOnly = false): string {
        $asString = $nameOnly ? $this->name : $this->asString();
        $ident = Php::asHtmlIdent($asString);
        if (SourceDocFixer::isHtmlNameError($asString)) {
            return $ident;
        }
        return strtolower($ident);
    }

    private function checkInNamespace(): void {
        if (!$this->inNamespace) {
            throw new RuntimeException("Name '$this->name' not in namespace!");
        }
    }

    public function __toString(): string {
        return $this->asString();
    }

}
