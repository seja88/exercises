<?php

require_once 'DB.php';
require_once 'Session.php';
require_once 'Region.php';

DB::connect('localhost', 'world', 'root', 'rootroot');

$id = $_GET['id'] ?? null;

if (isset($id)) {
    $region = DB::selectOne("select * from `regions` where `id` = ?", [$id], Region::class);

    if ($region === false) {
        echo 'Region with id ' . $id . ' not found.';
        exit();
    }
} else {
    $region = new Region();
}

$valid = true;
$errors = [];

if (empty($_POST['name'])) {
    $valid = false;
    $errors[] = 'The name field is mandatory';
}

if (empty($_POST['slug'])) {
    $valid = false;
    $errors[] = 'The slug field is mandatory';
}

if ($valid === false) {
    Session::instance()->flashRequest();
    Session::instance()->flash('errors', $errors);

    if ($id) {
        header('Location: edit.php?id=' . $id);
    } else {
        header('Location: edit.php');
    }

    exit();
}

$region->name = $_POST['name'] ?? $region->name;
$region->slug = $_POST['slug'] ?? $region->slug;
$region->save();

Session::instance()->flash('success_message', 'Region successfully saved');

header('Location: edit.php?id=' . $region->id);
