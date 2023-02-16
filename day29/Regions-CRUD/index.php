<?php

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Region.php';

DB::connect('localhost', 'world', 'root', 'rootroot');

$data = DB::select("select * from `regions`", [], Region::class);

echo '<pre>';
var_export($data);
echo '</pre>';
