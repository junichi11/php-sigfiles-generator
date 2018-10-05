<?php

use utils\Log;
use utils\Strings;

class PhpConstants extends PhpElements {

    /** @var PhpDoc */
    private $phpDoc;

    public static function collect(): void {
        $constants = glob(Config::get()->inputDir() . '/*.constants.*html', GLOB_ERR);
        foreach ($constants as $consts) {
            $refName = self::getConstantsName($consts);
            if (Config::get()->isBlacklistConstants($refName)) {
                Log::debug("Constants '$refName' are blacklisted");
                continue;
            }
            Log::debug("Processing constants from '$consts'");
            new PhpConstants($consts);
        }
    }

    private static function getConstantsName(string $constants): string {
        $name = strtolower(str_replace(['.html', 'constants.', 'constants'], '', basename($constants)));
        while (Strings::endsWith($name, '.')) {
            $name = substr($name, 0, -1);
        }
        return $name;
    }

    protected function init(): void {
        $this->phpDoc = new PhpDoc($this->xpath());
        $this->phpDoc->parseConstants(self::getConstantsName($this->file), false, true);

        $constants = $this->phpDoc->getConstantNames();
        if (!count($constants)) {
            Log::info("No constants found in file '$this->file'");
            return;
        }
        foreach ($constants as $constant) {
            if (Config::get()->isBlacklistConstant($constant)) {
                Log::debug("Constant '$constant' is blacklisted");
                continue;
            }
            if (Strings::contains($constant, '::')) {
                // XXX
                Log::info("Skipping class constant '$constant'");
                continue;
            }
            if (Strings::contains($constant, PhpName::NAMESPACE_SEPARATOR)) {
                // XXX
                Log::info("Skipping namespace constant '$constant'");
                continue;
            }
            PhpGenerator::collect(new PhpGeneratorItem(self::getConstantsName($this->file),
                new PhpConstant($this->file, PhpName::fromString($constant), $this->phpDoc)));
        }
    }

}
