<?php

namespace utils;

use PhpName;

final class Php {

    /** @var string[] */
    private static $builtInTypes = [
        'array',
        'bool',
        'boolean',
        'callable',
        'callback',
        'false',
        'float',
        'int',
        'integer',
        'iterable',
        'mixed',
        'null',
        'number',
        'object',
        'resource',
        'string',
        'void',
    ];

    /** @var string[] */
    private static $pseudoTypes = [
        'number',
        'resource',
    ];

    /** @var string[] */
    private static $pseudoTypesReplaceMap = [
        'integer' => 'int',
        'boolean' => 'bool',
    ];

    private function __construct() {
    }

    public static function sanitizeHtml(string $html, bool $removeProceduralInfos = false): string {
        $replacement = [
            //'%<div class="phpcode">(.+)</div>%is' => '<pre>$1</pre>',
            '%<span class="type">([^<]+)</span>%i' => '<code>$1</code>',
            '%<([a-z][a-z0-9]*)[^>]*?(/?)>%i' => '<$1$2>',

            '%[\n\r]%' => ' ',
            '%\s+%' => ' ',
        ];
        $html = preg_replace(array_keys($replacement), $replacement, $html);
        $replacement = [
            '<p> ' => '<p>',
            ' </p>' => '</p>',
            '<em>' => '<i>',
            '</em>' => '</i>',
            '<strong>' => '<b>',
            '</strong>' => '</b>',
            '<span><a>' => '<code>',
            '</a></span>' => '</code>',
            '&raquo;&nbsp;' => '',
            '?' => '&#63;',
            '*' => '&#42;',

            '<b>Warning</b>' => '<p><b>Warning</b></p>',
        ];
        $html = str_replace(array_keys($replacement), $replacement, $html);
        $html = strip_tags($html, '<br><p><pre><code><b><i><ul><ol><li>');
        if ($removeProceduralInfos) {
            $proceduralInfos = [
                'Procedural style only: ',
                'Only for procedural calls. ',
            ];
            $html = str_replace($proceduralInfos, '', $html);
        }
        $html = trim($html);
        if ($html === '<p></p>') {
            return '';
        }
        return $html;
    }

    public static function sanitizeName(?string $name): ?string {
        $name = SourceDocFixer::name($name);
        $name = str_replace('-', '_', $name);
        if (preg_match('/\\W/', $name)) {
            Log::error("WTF name $name", true);
        }
        return $name;
    }

    public static function sanitizeType(?string $type, bool $phpDoc = false): ?string {
        if ($type === null) {
            return $phpDoc ? 'mixed' : null;
        }
        $type = explode('[', $type)[0];
        foreach (self::$pseudoTypesReplaceMap as $search => $replace) {
            $type = str_replace($search, $replace, $type);
        }
        $type = str_replace('-', '_', $type);
        if (!$phpDoc && in_array($type, self::$pseudoTypes)) {
            return null;
        }
        $types = [];
        $parts = array_unique(explode('|', $type));
        $partsCount = count($parts);
        if (!$phpDoc) {
            // resource?
            if (in_array('resource', $parts)) {
                // resource => noop (phpdoc will help us)
                return '';
            }
            // void?
            if (in_array('void', $parts)) {
                // void[|...] => void
                return 'void';
            }
            // false?
            if (in_array('false', $parts)) {
                if ($partsCount == 1) {
                    // false => bool
                    return 'bool';
                }
                if ($partsCount == 2
                        && in_array('null', $parts)) {
                    // null|false => ?bool
                    return '?bool';
                }
            }
        }
        foreach ($parts as $part) {
            $prefix = self::isBuiltinType($part) ? '' : PhpName::DEFAULT_NAMESPACE;
            // e.g. public parallel\Events::poll ( void ) : ?Event
            if (Strings::startsWith($part, '?')) {
                $prefix = '?' . $prefix;
                $part = substr($part, 1);
            }
            // avoid adding default namespace twice
            if (Strings::startsWith($part, PhpName::DEFAULT_NAMESPACE)) {
                $part = substr($part, 1);
            }
            $types[] = $prefix . $part;
        }
        return implode('|', $types);
    }

    public static function sanitizeParamName(string $name): string {
        if (Strings::contains($name, '|')) {
            $nameParts = explode('|', $name);
            $name = $nameParts[count($nameParts) - 1];
        }
        if (!Strings::startsWith($name, '$')
                && !Strings::startsWith($name, '...')) {
            $name = '$' . $name;
        }
        if (Strings::startsWith($name, '$...')) {
            $name = '$_' . substr($name, 4);
        }
        if (Strings::startsWith($name, '$$')) {
            $name = substr($name, 1);
        }
        $name = explode(' ', $name, 2)[0];
        if (preg_match('%^\$\d+%', $name)) {
            Log::info("Sanitizing incorrect parameter name '$name'");
            $name = '$_' . substr($name, 1);
        }
        $name = str_replace('"', '', $name);
        return str_replace(['-', '*'], '_', $name);
    }

    public static function sanitizePropertyName(string $property): string {
        if (Strings::contains($property, ' ')) {
            $parts = explode(' ', trim($property));
            $property = trim($parts[count($parts) - 1]);
        }
        if (!Strings::startsWith($property, '$')) {
            $property = '$' . $property;
        }
        return $property;
    }

    public static function sanitizeConstantName(string $constant, bool $sanitizeClassConstants): string {
        $constant = trim(explode('(', $constant, 2)[0]);
        $constant = trim(explode(NEW_LINE, $constant, 2)[0]);
        $constant = str_replace('-', '_', $constant);
        if ($sanitizeClassConstants && Strings::contains($constant, '::')) {
            // XXX
            $constant = trim(explode('::', $constant, 2)[1]);
        }
        if (Strings::contains($constant, PhpName::NAMESPACE_SEPARATOR)) {
            // XXX
            Log::error("Non-default namespace constant $constant");
        }
        return $constant;
    }

    public static function sanitizeInitializer(string $initializer, string $type) {
        $initializer = trim($initializer);
        if ($initializer === '=') {
            return '= null';
        }
        if (!Strings::startsWith($initializer, '= ')) {
            $initializer = '= ' . $initializer;
        }
        switch ($type) {
            case 'string':
                if (strtolower($initializer) !== '= null'
                        && !Strings::endsWith($initializer,'"')
                        && !Strings::endsWith($initializer,"'")) {
                    $initializer = '= \'' . substr($initializer, 2) . '\'';
                }
        }
        if (Strings::endsWith($initializer, ' array()')) {
            return $initializer;
        }
        // mongodb-driver-manager.construct.html
        if (Strings::startsWith($initializer, '= "') && !Strings::endsWith($initializer, '"')) {
            $initializer = str_replace('= "', "= '", $initializer) . "'";
        }
        if (Strings::endsWith($initializer, ')')) {
            $initializer= str_replace('= ', ' = \'', $initializer) . '\'';
        }
        return $initializer;
    }

    public static function asHtmlIdent(string $ident): string {
        return str_replace(['_', PhpName::NAMESPACE_SEPARATOR], '-', $ident);
    }

    public static function sanitizeMethodModifiers($modifires, string $methodName) {
        $result = $modifires;
        if ($methodName === '__construct') {
            if (in_array('static', $modifires)) {
                $result = array_diff($modifires, ['static']);
            }
        }
        return $result;
    }

    private static function isBuiltinType(string $type) {
        $type = strtolower($type);
        if (in_array($type, self::$builtInTypes)) {
            return true;
        }
        if (Strings::startsWith($type, '?')) {
            return in_array(substr($type, 1), self::$builtInTypes);
        }
        return false;
    }

}
