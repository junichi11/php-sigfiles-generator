<?php

use utils\Html;
use utils\Log;
use utils\Strings;

class PhpFileMapper {

    /** @var string[] */
    private static $mapping = [];

    public static function init(): void {
        $books = glob(Config::get()->inputDir() . '/book.*.html', GLOB_ERR);
        foreach ($books as $book) {
            self::processBook($book);
        }
    }

    public static function map(string $filename): string {
        if (array_key_exists($filename, self::$mapping)) {
            return self::$mapping[$filename];
        }
        if (Strings::contains($filename, '.')) {
            $parts = explode('.', $filename, 2);
            switch ($parts[0]) {
                case 'language':
                case 'internals2':
                    return $parts[1];
                default:
                    return $parts[0];
            }
        }
        return $filename;
    }

    private static function processBook(string $filename): void {
        $book = self::processFilename(basename($filename), 'book.');
        $xpath = Html::xpath($filename);
        self::processLinks($book, $xpath, 'class');
        self::processLinks($book, $xpath, 'function');
    }

    private static function processLinks(string $book, DOMXPath $xpath, string $type): void {
        $links = Html::queryNodes($xpath, '//div[@class="book"]//a[contains(@href, "' . $type. '.")]', null, true);
        foreach ($links as $link) {
            $href = $link->attributes->getNamedItem('href')->nodeValue;
            $name = self::processFilename($href, "$type.");
            if (array_key_exists($name, self::$mapping)) {
                if ($book !== self::$mapping[$name]) {
                    // XXX not fatal
                    Log::error("Duplicated $type name $name found in file $href [" . self::$mapping[$name] . " vs $book]", true);
                }
            } else {
                self::$mapping[$name] = $book;
            }
        }
    }

    private static function processFilename(string $filename, string $prefix): string {
        return str_replace([$prefix, '.html'], '', $filename);
    }

}
