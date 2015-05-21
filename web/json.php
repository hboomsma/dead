<?php
$cmd = realpath(__DIR__ . "/../bin/dead.phar");
$table = escapeshellarg($_REQUEST['table']);
$path = escapeshellarg($_REQUEST['path']);
passthru("$cmd -t $table json $path");
