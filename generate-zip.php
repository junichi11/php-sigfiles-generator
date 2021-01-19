<?php

require __DIR__ . '/bootstrap.php';

use utils\Log;
use utils\Strings;
use zip\SigfilesZipper;

Log::start(false);
Log::info('Generate phpsigfiles' . Strings::appendPrefix(Config::get()->sigfilesVersion(), '-') . '.zip');
$licenseFiles = glob(__DIR__ . '/resources/licenses/*');
SigfilesZipper::generate($licenseFiles);

// finish
echo NEW_LINE;
Log::finish();
