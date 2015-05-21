<?php
$cmd = realpath(__DIR__ . "/../bin/dead.phar");
exec("$cmd tables", $tables);
echo json_encode($tables);
