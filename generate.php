<?php

use utils\Files;
use utils\Log;

define('NEW_LINE', "\n");
spl_autoload_register(function($class) {
    $classFile = __DIR__ . '/src/' . str_replace('\\', '/', $class) . '.php';
    if (is_file($classFile)) {
        require_once $classFile;
    } else {
        Log::error("Cannot find class file for '$class'", true);
    }
});

Log::start(false);
Config::create([
    __DIR__ . '/config.ini',
    __DIR__ . '/config.local.ini',
    getenv('HOME') . '/.php.sigfiles.config.ini',
]);

// clean
Files::deleteFiles(Config::get()->outputDir());

// init
PhpFileMapper::init();

// collect
PhpGenerator::collectTypes();
PhpGenerator::collectFunctions();
PhpGenerator::collectConstants();

// generate
PhpGenerator::generate();

// finish
echo NEW_LINE;
PhpGenerator::report();
Log::finish();
