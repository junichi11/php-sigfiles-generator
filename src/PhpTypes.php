<?php

use utils\Html;
use utils\Log;
use utils\Strings;

class Phptypes extends PhpElements {

    /** @var string */
    private $title = null;

    public static function collect(): void {
        $types = glob(Config::get()->inputDir() . '/class.*.html', GLOB_ERR);
        foreach ($types as $type) {
            $typeName = self::getTypeName($type);
            if (Config::get()->isBlacklistType($typeName)) {
                Log::debug("Type '$typeName' is blacklisted");
                continue;
            }
            Log::debug("Processing type '$type'");
            new PhpTypes($type);
        }
    }

    private static function getTypeName(string $file): string {
        $what = ['class.', '.html'];
        return strtolower(str_replace($what, '', basename($file)));
    }

    protected function init(): void {
        $name = $this->initName();
        if (Config::get()->isBlacklistType($name->asString())) {
            Log::debug("Type '$name' is blacklisted");
            return;
        }
        $type = $this->initType($name);
        if ($type === null) {
            return;
        }
        // types
        $name = $type->getName();
        $filename = PhpFileMapper::map(strtolower($name->getFilename() ?: self::getTypeName($this->file)));
        PhpGenerator::collect(new PhpGeneratorItem($filename, $type));
        // related functions
        /* @var PhpName $lastName */
        foreach ($type->getRelatedFunctions() as $function) {
            $fncName = $function->getName();
            if (Config::get()->isBlacklistFunction($fncName->getName())) {
                Log::debug("Function '{$fncName->getName()}' is blacklisted");
                continue;
            }
            PhpGenerator::collect(new PhpGeneratorItem($filename, $function));
        }
        // related constants
        if (Config::get()->isBlacklistConstants($name->getName())) {
            Log::debug("Constants '{$name->getName()}' are blacklisted");
        } else {
            $constantPhpDoc = $type->getAllConstantsPhpDoc();
            foreach ($constantPhpDoc->getConstantNames() as $constant) {
                if (Strings::contains($constant, '::')) {
                    // class constant, already printed
                    continue;
                }
                if (Config::get()->isBlacklistConstant($constant)) {
                    Log::debug("Constant '$constant' is blacklisted");
                    continue;
                }
                $const = new PhpConstant($this->file, PhpName::fromString($constant), $constantPhpDoc);
                PhpGenerator::collect(new PhpGeneratorItem($filename, $const));
            }
        }
    }

    private function initName(): PhpName {
        $name = Html::queryFirstValue($this->xpath(), '//*[@class="classsynopsisinfo"]//strong[@class="classname"]', null, true);
        if ($name === null) {
            $titleParts = explode(' ', $this->getTitle());
            if (count($titleParts) === 3) {
                $name = $titleParts[1];
            }
        }
        if ($name === null) {
            Log::error("Missing name in file '$this->file'", true);
        }
        return PhpName::fromString($name);
    }

    private function initType(PhpName $name): ?PhpType {
        $class = 0;
        $interface = 0;
        // detect from title
        $replace = ['[deprecated]', '(deprecated)'];
        $title = trim(str_replace($replace, '', $this->getTitle()));
        if (Strings::endsWith($title, 'class')) {
            $class++;
        } elseif (Strings::endsWith($title, 'interface')) {
            $interface++;
        } else {
            Log::error("Unexpected title '$title' in file '$this->file'");
        }
        // detect from synopsis
        $synopsis = Html::queryFirstValue($this->xpath(), '//div[@id="' . $name->asHtmlIdent() . '.synopsis"]/h2', null, true);
        if ($synopsis === null) {
            $synopsis = Html::queryFirstValue($this->xpath(), '//div[@id="' . $name->asHtmlIdent(true) . '.synopsis"]/h2', null, true);
        }
        if ($synopsis) {
            $synopsis = strtolower($synopsis);
            if (Strings::startsWith($synopsis, 'class')) {
                $class++;
            } elseif (Strings::startsWith($synopsis, 'interface')) {
                $interface++;
            } else {
                Log::error("Unexpected synopsis '$synopsis' in file '$this->file'", true);
            }
        }
        // init - prefer interface
        if ($interface > 0) {
            return new PhpInterface($this->file, $name);
        }
        if ($class > 0) {
            return new PhpClass($this->file, $name);
        }
        Log::error("Unknown type in file '$this->file'", true);
        return null;
    }

    private function getTitle(): string {
        if ($this->title === null) {
            $this->title = Html::querySingleValue($this->xpath(), '//h1[@class="title"]');
        }
        return $this->title;
    }

}
