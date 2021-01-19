<?php

namespace utils;

final class Strings {

    private function __construct() {
    }

    public static function startsWith(string $haystack, string $needle): bool {
        $length = strlen($needle);
        return substr($haystack, 0, $length) === $needle;
    }

    public static function endsWith(string $haystack, string $needle): bool {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }
        return substr($haystack, -$length) === $needle;
    }

    public static function contains(string $haystack, string $needle): bool {
        return strpos($haystack, $needle) !== false;
    }

    public static function indent(int $indent, string $text, bool $appendNewLine = true): string {
        return str_repeat("\t", $indent) . $text . ($appendNewLine ? NEW_LINE : '');
    }

    public static function appendPrefix(string $text, string $prefix, bool $ignoreEmptyText = true) {
        if ($text === '' && $ignoreEmptyText) {
            return $text;
        }
        return $prefix . $text;
    }

    public static function appendSuffix(string $text, string $suffix, bool $ignoreEmptyText = true) {
        if ($text === '' && $ignoreEmptyText) {
            return $text;
        }
        return $text . $suffix;
    }
}
