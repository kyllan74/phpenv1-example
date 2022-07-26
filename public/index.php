<?php
require_once '../vendor/autoload.php';
echo "Hello World\n";

use Medoo\Medoo;
$database = new Medoo([
'type' => 'sqlite',
'database' => '../storage/database.db',
]);

dump($database);
