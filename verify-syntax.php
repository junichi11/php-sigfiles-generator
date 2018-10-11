<?php

require './bootstrap.php';

use utils\Log;

Log::start(false);

$command = "./php-lint " . Config::get()->outputDir();
$output = [];
exec($command, $output);
echo PHP_EOL;
echo "== OUTPUT ==" . PHP_EOL;
foreach ($output as $value) {
    echo $value . PHP_EOL;
}
echo PHP_EOL;

Log::finish();
