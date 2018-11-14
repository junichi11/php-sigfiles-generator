<?php

require __DIR__ . '/bootstrap.php';

use utils\Files;
use utils\Log;
use zip\SigfilesZipper;

Log::start(false);

// clean
Files::deleteFiles(Config::get()->outputDir());

// init
PhpFileMapper::init();

// collect
PhpGenerator::collectInternals();
PhpGenerator::collectTypes();
PhpGenerator::collectFunctions();
PhpGenerator::collectConstants();

// generate
PhpGenerator::generate();

// finish generating
echo NEW_LINE;
PhpGenerator::report();

// zip
if (Config::get()->zipOnGenerating()) {
    echo NEW_LINE;
    Log::info('Generate phpsigfiles-' . Config::get()->sigfilesVersion() . '.zip');
    $licenseFiles = glob(__DIR__ . '/resources/licenses/*');
    SigfilesZipper::generate($licenseFiles);
}

Log::finish();
