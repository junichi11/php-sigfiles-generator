<?php

namespace utils;

final class Files {

    private function __construct() {
    }

    public static function findFile(string $file): string {
        $file = explode('#', $file)[0];
        if (is_file($file)) {
            return $file;
        }
        $file = \Config::get()->inputDir() . '/' . $file;
        if (is_file($file)) {
            return $file;
        }
        throw new \RuntimeException("File '$file' does not exist.");
    }

    public static function deleteFiles(string $dir): void {
        foreach (glob($dir . '/*') as $file) {
            if (!@unlink($file)) {
                Log::error("Cannot delete file '$file'", true);
            }
        }
    }

    public static function phpFile(string $outputDir, string $name, string $license): string {
        $file = $outputDir . '/' . $name . '.php';
        if (!is_file($file)) {
            file_put_contents($file, self::header($license));
        }
        return $file;
    }

    public static function writeToFile(string $file, string $content, bool $appendNewLine = true): void {
        if ($appendNewLine) {
            $content .= NEW_LINE;
        }
        file_put_contents($file, $content, FILE_APPEND);
    }

    private static function header(string $license): string {
        $out = '';
        $out .= '<?php' . NEW_LINE;
        $out .= $license . NEW_LINE . NEW_LINE;
        // XXX
        //$out .= '// Generated on ' . (new \DateTime())->format('r') . NEW_LINE;
        $out .= NEW_LINE;
        return $out;
    }

}
