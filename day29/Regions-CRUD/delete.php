<?php

require_once 'DB.php';
require_once 'Region.php';

DB::connect('localhost', 'world', 'root', 'rootroot');

$id = $_GET['id'] ?? null;

$region = DB::selectOne("select * from `regions` where `id` = ?", [$id], Region::class);
$region->delete();

echo 'Region deleted.';
