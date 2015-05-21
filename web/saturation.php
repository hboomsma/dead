<?php
header("Content-Type: image/svg+xml");
$cmd = realpath(__DIR__ . "/../bin/dead.phar");

if(isset($_GET['path'])) {
  $path = "-p " . escapeshellarg($_GET['path']);
} else {
  $path = "";
}

if(isset($_GET['tables'])) {
  $tables = escapeshellcmd(explode(PATH_SEPARATOR, $_GET['tables']));
  $scale = "-s";
} else {
  $tables = escapeshellcmd($_GET['table']);
  $scale = "";
}

passthru("$cmd graph -w 1000 -h 500 saturation $scale $scale $path $tables");
