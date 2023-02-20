<?php

// require all the necessary libraries
// see bootstrap.php for details
require_once 'bootstrap.php';

if (isset($_GET['id'])) {
    // if there is an 'id' parameter in the URL
    // this is EDITING an existing entity

    $album = find($_GET['id'], 'Album');
    $back = 'edit.php?id=' . $album->id;
} else {
    // otherwise this is CREATING a new entity

    $album = new Album;
    $back = 'edit.php';
}

// validate

$valid = true;
$errors = [];

if (!trim($_POST['name'])) {
    $valid = false;
    $errors['name'][] = 'Name is mandatory.';
}

if (!trim($_POST['author'])) {
    $valid = false;
    $errors['author'][] = 'Author is mandatory.';
}

if (!trim($_POST['year'])) {
    $valid = false;
    $errors['year'][] = 'Year is mandatory.';
}

if (!$valid) {
    session()->flashRequest();
    session()->flash('errors', $errors);

    header('Location: '.$back);
    exit();
}