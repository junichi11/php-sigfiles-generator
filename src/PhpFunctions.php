<?php

use utils\Log;

class PhpFunctions extends PhpElements {

    public static function collect(): void {
        $refs = glob(Config::get()->inputDir() . '/ref.*.html', GLOB_ERR);
        foreach ($refs as $ref) {
            $refName = self::getRefName($ref);
            if (Config::get()->isBlacklistFunctions($refName)) {
                Log::debug("Functions '$refName' are blacklisted");
                continue;
            }
            Log::debug("Processing functions from '$ref'");
            new PhpFunctions($ref);
        }
    }

    private static function getRefName(string $ref): string {
        $what = ['ref.', '.html'];
        return strtolower(str_replace($what, '', basename($ref)));
    }

    protected function init(): void {
        $elements = $this->xpath()->query('//ul[@class="chunklist chunklist_reference"]//a[starts-with(@href, "function.")]');
        if (is_null($elements)) {
            Log::warn("No functions found in file '$this->file'");
            return;
        }
        foreach ($elements as $element) {
            $file = $element->attributes->getNamedItem('href')->nodeValue;
            $docName = strtolower($element->nodeValue);
            if (Config::get()->isBlacklistFunction($docName)) {
                Log::debug("Function '{$docName}' is blacklisted");
                continue;
            }
            $function = new PhpFunction($file);
            $name = $function->getName();
            if (Config::get()->isBlacklistFunction($name->getName())) {
                Log::debug("Function '{$name->getName()}' is blacklisted");
                continue;
            }
            Log::debug("Processing function from '$file'");
            $filename = PhpFileMapper::map($name->getFilename() ?: self::getRefName($this->file));
            PhpGenerator::collect(new PhpGeneratorItem($filename, $function));
        }
    }

}
