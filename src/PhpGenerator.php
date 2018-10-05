<?php

use utils\Files;
use utils\Log;

class PhpGenerator {

    /** @var int */
    private static $files = 0;
    /** @var int */
    private static $types = 0;
    /** @var int */
    private static $functions = 0;
    /** @var int */
    private static $constants = 0;
    /** @var PhpGeneratorItem[] */
    private static $items = [];
    /** @var PhpGeneratorItem[] */
    private static $duplicities= [];

    public static function collectTypes(): void {
        PhpTypes::collect();
    }

    public static function collectFunctions(): void {
        PhpFunctions::collect();
    }

    public static function collectConstants(): void {
        PhpConstants::collect();
    }

    public static function generate(): void {
        self::sort();
        $currentNamespace = PhpName::DEFAULT_NAMESPACE;
        $currentFilename = null;
        $currentFile = null;
        foreach (self::$items as $item) {
            self::countItem($item);
            $filename = $item->getFilename();
            if ($currentFilename != $filename) {
                if ($currentFile !== null && $currentNamespace !== PhpName::DEFAULT_NAMESPACE) {
                    Files::writeToFile($currentFile, '}');
                }
                $currentNamespace = PhpName::DEFAULT_NAMESPACE;
                $currentFilename = $filename;
                $currentFile = self::getOutputFile($filename);
                self::$files++;
            }
            $name = $item->getName();
            $namespace = $name->isInNamespace() ? $name->getNamespace() : PhpName::DEFAULT_NAMESPACE;
            if ($currentNamespace !== $namespace) {
                if ($currentNamespace !== PhpName::DEFAULT_NAMESPACE) {
                    Files::writeToFile($currentFile, '}');
                    Files::writeToFile($currentFile, NEW_LINE, false);
                }
                if ($namespace !== PhpName::DEFAULT_NAMESPACE) {
                    Files::writeToFile($currentFile, "namespace $namespace {");
                    Files::writeToFile($currentFile, '');
                }
                $currentNamespace = $namespace;
            }
            $indent = $currentNamespace === PhpName::DEFAULT_NAMESPACE ? 0 : 1;
            $signature = $item->getSigFileElement()->signature(true, $indent);
            if ($signature) {
                Files::writeToFile($currentFile, $signature);
            }
        }
        if ($currentFile !== null && $currentNamespace !== PhpName::DEFAULT_NAMESPACE) {
            Files::writeToFile($currentFile, '}');
        }
    }

    public static function report(): void {
        echo 'Generated ' . self::$files . ' files:' . NEW_LINE;
        echo self::sprintfNumber(self::$types) . ' types' . NEW_LINE;
        echo self::sprintfNumber(self::$functions) . ' functions' . NEW_LINE;
        echo self::sprintfNumber(self::$constants) . ' constants' . NEW_LINE;
        // XXX
        echo 'Duplicated items: ' . count(self::$duplicities) . NEW_LINE;
    }

    public static function collect(PhpGeneratorItem $item) {
        $name = $item->getName()->asString();
        if (array_key_exists($name, self::$items)) {
            if (!array_key_exists($name, self::$duplicities)) {
                self::$duplicities[$name] = [];
            }
            self::$duplicities[$name][] = self::$items[$name];
            self::$duplicities[$name][] = $item;
            Log::error("Name $name already exists in items");
        } else {
            self::$items[$name] = $item;
        }
    }

    // XXX improve
    private static function sort() {
        uasort(self::$items, function(PhpGeneratorItem $item1, PhpGeneratorItem $item2) {
            $filename1 = $item1->getFilename();
            $filename2 = $item2->getFilename();
            if ($filename1 !== $filename2) {
                return strcasecmp($filename1, $filename2);
            }
            $isType1 = $item1->isType();
            $isFunction1 = $item1->isFunction();
            $isConstant1 = $item1->isConstant();
            $isType2 = $item2->isType();
            $isFunction2 = $item2->isFunction();
            $isConstant2 = $item2->isConstant();
            if ($isType1) {
                if (!$isType2) {
                    return -1;
                }
            }
            if ($isFunction1) {
                if ($isType2) {
                    return 1;
                }
                if ($isConstant2) {
                    return -1;
                }
            }
            if ($isConstant1) {
                if (!$isConstant2) {
                    return 1;
                }
            }
            // XXX
            return strcasecmp($item1->getName()->asString(), $item2->getName()->asString());
        });
    }

    private static function getOutputFile(string $filename): string {
        return Files::phpFile(Config::get()->outputDir(), $filename, Config::get()->license());
    }

    private static function countItem(PhpGeneratorItem $item) {
        if ($item->isType()) {
            self::$types++;
        } elseif ($item->isFunction()) {
            self::$functions++;
        } elseif ($item->isConstant()) {
            self::$constants++;
        } else {
            Log::error("Unexpected item $item", true);
        }
    }

    private static function sprintfNumber(int $number) {
        return sprintf('%8d', $number);
    }

}
