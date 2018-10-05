<?php

namespace utils;

// XXX move everything here
class SourceDocFixer {

    public static function name(?string $name): ?string {
        if (Strings::startsWith($name, 'LOG_LOCAL0 ')) {
            return 'LOG_LOCAL0';
        }
        return $name;
    }

    public static function isHtmlNameError(string $name): bool {
        switch ($name) {
            case 'OCI-Collection':
            case 'OCI-Lob':
                return true;
            default:
                return false;
        }
    }

    public static function isHtmlDescriptionError(string $file): bool {
        return strtolower(basename($file)) === 'function.readline-callback-handler-install.html';
    }

}
