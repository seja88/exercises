<?php

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Region.php';

DB::connect('localhost', 'world', 'root', 'rootroot');

$id = $_GET['id'] ?? null;

if (isset($id)) {
    $region = DB::selectOne("select * from `regions` where `id` = ?", [$id], Region::class);
    $region->name = "Updated Region";
    $region->slug = "updated-region";
    $region->update();
} else {
    $region = new Region();
    $region->name = 'Central Africa';
    $region->slug = 'central-africa';
    $region->insert();
}

echo '<pre>';
var_export($region);
echo '</pre>';

