<?php

require __DIR__ . '/bootstrap.php';

use utils\Log;
use zip\SigfilesZipper;

Log::start(false);

Log::info('Generate phpsigfiles-' . Config::get()->sigfilesVersion() . '.zip');
$licenseFiles = glob(__DIR__ . '/resources/licenses/*');
SigfilesZipper::generate($licenseFiles);

// finish
echo NEW_LINE;
Log::finish();
