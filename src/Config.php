<?php

use utils\Log;
use utils\Strings;

final class Config {

    /** @var Config */
    private static $INSTANCE;

    /** @var array */
    private $config;

    private function __construct(array $configPaths) {
        $this->config = $this->parseConfigs($configPaths);
        if (!count($this->config)) {
            Log::error('No configuration provided [paths: ' . implode(', ', $configPaths) . ']', true);
        }
    }

    public static function get(): Config {
        if (self::$INSTANCE === null) {
            Log::error('Config instance must be created using Config.create() first', true);
        }
        return self::$INSTANCE;
    }

    public static function create(array $configPaths): Config {
        if (self::$INSTANCE !== null) {
            Log::error('Config instance already created', true);
        }
        self::$INSTANCE = new Config($configPaths);
        return self::$INSTANCE;
    }

    public function inputDir(): string {
        return $this->config['paths']['input'];
    }

    public function outputDir(): string {
        return $this->config['paths']['output'];
    }

    public function zipOutputDir(): string {
        return $this->config['paths']['zip.output'];
    }

    public function sigfilesVersion(): string {
        return trim($this->config['other']['sigfiles.version']);
    }

    public function license(): string {
        return trim($this->config['other']['license']);
    }

    public function phpDocUrl(): string {
        return $this->config['other']['phpdoc.url'];
    }

    public function overwriteZip(): bool {
        return $this->config['zip']['overwrite'];
    }

    public function zipOnGenerating(): bool {
        return $this->config['zip']['on.generating'];
    }

    public function isSha1PrefixedZip(): bool {
        return $this->config['zip']['sha1.prefix'];
    }

    public function isBlacklistType(string $type): bool {
        return $this->isBlacklist('type', $type);
    }

    public function isBlacklistFunctions(string $functions): bool {
        return $this->isBlacklist('functions', $functions);
    }

    public function isBlacklistFunction(string $function): bool {
        return $this->isBlacklist('function', $function);
    }

    public function isBlacklistConstants(string $constants): bool {
        return $this->isBlacklist('constants', $constants);
    }

    public function isBlacklistConstant(string $constant): bool {
        return $this->isBlacklist('constant', $constant);
    }

    private function isBlacklist(string $type, string $name): bool {
        $name = strtolower($name);
        foreach (['all', $type] as $blacklistType) {
            foreach ($this->config['blacklist'][$blacklistType] as $item) {
                if (Strings::endsWith($item, '*')) {
                    if (Strings::startsWith($name, substr($item, 0, -1))) {
                        return true;
                    }
                } else if ($item == $name) {
                    return true;
                }
            }
        }
        return false;
    }

    private function parseConfigs(array $configPaths): array {
        $config = [];
        foreach ($configPaths as $path) {
            if (!is_file($path)) {
                Log::info("Ignoring non-existing config path '$path'");
            } else {
                $config = array_merge($config, parse_ini_file($path, true, INI_SCANNER_TYPED));
            }
        }
        foreach (['blacklist'] as $type) {
            foreach ($config[$type] as $key => $value) {
                if ($value) {
                    $config[$type][$key] = array_map(function(string $element) {
                        return strtolower($element);
                    }, preg_split('%\s*,\s*%', $value));
                } else {
                    $config[$type][$key] = [];
                }
            }
        }
        return $config;
    }

}
