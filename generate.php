<?php

require './bootstrap.php';

use utils\Files;
use utils\Log;

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

// finish
echo NEW_LINE;
PhpGenerator::report();
Log::finish();
