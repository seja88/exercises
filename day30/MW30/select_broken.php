<?php

require_once 'DB.php';
require_once 'model/Country.php';

DB::connect('localhost', 'world', 'root', 'rootroot');

$query = "SELECT * FROM `countries`";
$resultList = DB::select($query, [], Country::class);

header('Content-type: application/json');
echo json_encode($resultList);

