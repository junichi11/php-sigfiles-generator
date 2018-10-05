<?php

namespace utils;

final class Html {

    private function __construct() {
    }

    public static function xpath(string $file): \DOMXPath {
        libxml_use_internal_errors(true);
        $html = new \DOMDocument();
        $html->preserveWhiteSpace = false;
        $html->loadHtmlFile(explode('#', $file)[0], LIBXML_NOWARNING);
        return new \DOMXPath($html);
    }

    public static function queryNodes(\DOMXPath $xpath, string $expression, \DOMNode $contextNode = null, bool $optional = false): \DOMNodeList {
        $elements = $xpath->query($expression, $contextNode);
        if (!$optional && ($elements === false || $elements->length === 0)) {
            Log::error("Expected at least one element but got 0 for '$expression' in '{$xpath->document->documentURI}'", true);
        }
        return $elements;
    }

    /** @return string[] */
    public static function queryValues(\DOMXPath $xpath, string $expression, \DOMNode $contextNode = null, bool $optional = false): array {
        $nodes = self::queryNodes($xpath, $expression, $contextNode, $optional);
        $values = [];
        if ($nodes->length) {
            foreach ($nodes as $node) {
                $values[] = $node->nodeValue;
            }
        }
        return $values;
    }

    public static function queryFirstNode(\DOMXPath $xpath, string $expression, \DOMNode $contextNode = null, bool $optional = false): ?\DOMNode {
        $elements = $xpath->query($expression, $contextNode);
        if ($elements->length === 0) {
            if (!$optional) {
                Log::error("Expected at least one element but got 0 for '$expression' in '{$xpath->document->documentURI}'", true);
            }
            return null;
        }
        return $elements->item(0);
    }

    public static function queryFirstValue(\DOMXPath $xpath, string $expression, \DOMNode $contextNode = null, bool $optional = false): ?string {
        $node = self::queryFirstNode($xpath, $expression, $contextNode, $optional);
        if ($node === null) {
            return null;
        }
        return trim($node->nodeValue);
    }

    public static function querySingleNode(\DOMXPath $xpath, string $expression, \DOMNode $contextNode = null, bool $optional = false): ?\DOMNode {
        $elements = $xpath->query($expression, $contextNode);
        if (!$optional && $elements->length !== 1) {
            Log::error("Expected exactly one element but got $elements->length for '$expression' in '{$xpath->document->documentURI}'", true);
        }
        if ($optional && $elements->length === 0) {
            return null;
        }
        return $elements->item(0);
    }

    public static function querySingleValue(\DOMXPath $xpath, string $expression, \DOMNode $contextNode = null, bool $optional = false): ?string {
        $node = self::querySingleNode($xpath, $expression, $contextNode, $optional);
        if ($node === null) {
            return null;
        }
        return trim($node->nodeValue);
    }

}
