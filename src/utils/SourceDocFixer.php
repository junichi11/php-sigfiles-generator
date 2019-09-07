<?php

namespace utils;

use PhpName;

class SourceDocFixer {

    public static function name(?string $name): ?string {
        if (Strings::startsWith($name, 'LOG_LOCAL0 ')) {
            return 'LOG_LOCAL0';
        }
        return $name;
    }

    public static function getHtmlIdent(string $htmlIdent): ?string {
        switch ($htmlIdent) {
            case 'OCI-Collection':
            case 'OCI-Lob':
                return $htmlIdent;
        }
        return null;
    }

    public static function getHtmlIdentForFields(string $htmlIdent): ?string {
        switch ($htmlIdent) {
            case 'zookeeper':
                return 'zookeeper.class';
        }
        return null;
    }

    public static function isHtmlDescriptionError(string $file): bool {
        return strtolower(basename($file)) === 'function.readline-callback-handler-install.html';
    }

    public static function isInvalidComment(string $comment): bool {
        $comment = strtolower($comment);
        return Strings::contains($comment, 'object oriented style')
                || Strings::contains($comment, 'procedural style');
    }

    public static function isConstantsBrokenFile(string $file): bool {
        $filename = basename($file);
        if (Strings::startsWith($filename, 'class.ui-')) {
            return true;
        }
        switch ($filename) {
            case 'class.snmp.html':
            case 'class.svm.html':
            case 'class.tokyotyrant.html':
            case 'class.yaf-response-abstract.html':
                return true;
        }
        return false;
    }

    public static function getDocErrorType(string $file, PhpName $name): ?string {
        $filename = basename($file);
        // doc error? e.g. soapfault.soapfault.html
        $lowerName = strtolower($name->getName());
        if (Strings::startsWith($filename, "$lowerName.$lowerName")) {
            return 'self';
        }
        switch ($filename) {
            case 'syncsharedmemory.read.html':
            case 'transliterator.transliterate.html':
                return 'string';
            case 'syncsharedmemory.write.html':
                return 'int';
            case 'parallel-sync.invoke.html': // no break
            case 'parallel-sync.notify.html': // no break
            case 'parallel-sync.set.html': // no break
            case 'parallel-sync.wait.html':
                return 'void';
            case 'snmp.setsecurity.html':
                return 'bool';
        }
        if (Strings::startsWith($filename, 'ui-')) {
            return 'void';
        }
        if (Strings::startsWith($filename, 'vtiful-kernel-excel.')) {
            return 'self';
        }
        if (Strings::startsWith($filename, 'vtiful-kernel-format.')) {
            return 'resource';
        }
        return null;
    }

    public static function methodNodeIndex(PhpName $name): ?int {
        if ($name->asString() === 'number_format') {
            return 1;
        }
        return null;
    }

    public static function isInvalidConstant(string $name, string $constant): bool {
        if ($name === 'pdo' && $constant === 'Attribute') {
            return true;
        }
        return false;
    }

}
