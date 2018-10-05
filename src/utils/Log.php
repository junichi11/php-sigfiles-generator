<?php

namespace utils;

class Log {

    /** @var bool */
    private static $DEBUG = false;
    /** @var float */
    private static $START = false;

    private function __construct() {
    }

    public static function start(bool $debug = false): void {
        self::$START = microtime(true);
        self::$DEBUG = $debug;
    }

    public static function finish(): void {
        $finish = microtime(true) - self::$START;
        echo "Runtime: $finish s\n" . NEW_LINE;
    }

    public static function error(string $message, bool $fatal = false): void {
        self::printMessage('ERROR', $message, true);
        if ($fatal) {
            fwrite(STDERR, NEW_LINE . 'FATAL ERROR, application exit' . NEW_LINE);
            throw new \RuntimeException($message);
        }
    }

    public static function warn(string $message): void {
        self::printMessage('WARN', $message);
    }

    public static function info(string $message): void {
        self::printMessage('INFO', $message);
    }

    public static function debug(string $message): void {
        if (self::$DEBUG) {
            self::printMessage('DEBUG', $message);
        }
    }

    private static function printMessage(string $level, string $message, bool $error = false): void {
        fwrite($error ? STDERR : STDOUT, sprintf("[%-5s] %s (%s)\n", $level, $message, self::callerSuffix()));
    }

    private static function callerSuffix(): string {
        $caller = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 3)[2];
        return basename($caller['file']) . ':' . $caller['line'];
    }

}
