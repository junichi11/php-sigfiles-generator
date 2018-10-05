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

    private function __construct() {
    }

    public static function sanitizeHtml(string $html, bool $removeProceduralInfos = false): string {
        $replacement = [
            //'%<div class="phpcode">(.+)</div>%is' => '<pre>$1</pre>',
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

    public static function sanitizeType(?string $type, bool $allowPipe = false, bool $allowMixed = true): ?string {
        if ($type === null) {
            return $allowMixed ? 'mixed' : null;
        }
        $type = explode('[', $type)[0];
        if (!$allowPipe) {
            $type = explode('|', $type, 2)[0];
        }
        $type = str_replace('-', '_', $type);
        if (!$allowMixed && $type === 'mixed') {
            return null;
        }
        $types = [];
        foreach (explode('|', $type) as $part) {
            $prefix = self::isBuiltinType($part) ? '' : PhpName::DEFAULT_NAMESPACE;
            $types[] = $prefix . $part;
        }
        return implode('|', $types);
    }

    public static function sanitizeParamName(string $name): string {
        if (Strings::contains($name, '|')) {
            $nameParts = explode('|', $name);
            $name = $nameParts[count($nameParts) - 1];
        }
        if (!Strings::startsWith($name, '$')) {
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
        // file:///home/gapon/tmp/phpsigfiles/html/mongodb-driver-manager.construct.html
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
