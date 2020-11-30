<?php

use utils\Log;

putenv('project=' . __DIR__);
define('NEW_LINE', "\n");
spl_autoload_register(function($class) {
    $classFile = __DIR__ . '/src/' . str_replace('\\', '/', $class) . '.php';
    if (is_file($classFile)) {
        require_once $classFile;
    } else {
        Log::error("Cannot find class file for '$class'", true);
    }
});

Config::create([
    __DIR__ . '/config.ini',
    __DIR__ . '/config.local.ini',
    getenv('HOME') . '/.php.sigfiles.config.ini',
]);
