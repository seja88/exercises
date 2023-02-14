<?php

require_once 'DBBlackbox.php';
require_once 'Session.php';
require_once 'Song.php';

// find the ID of the record we want to edit in the request
$id = $_GET['id'];

// somehow retrieve existing data from some storage
$song = find( $id, 'Song' );

// VALIDATION:

// declare that everything is fine
$valid = true;
$error_messages = [];

if (trim($_POST['name']) === '') {
    // if name is empty
    $valid = false;

    // add an error message
    $error_messages['name'][] = 'Name is mandatory';
}

if (trim($_POST['author']) === '') {
    // if author is empty
    $valid = false;

    // add an error message
    $error_messages['author'][] = 'Author name is mandatory';
}

// if validation failed, redirect, flash, etc.
if ($valid === false) {
    // flash error messages
    Session::instance()->flash('error_messages', $error_messages);

    // flash all the incoming $_POST data
    Session::instance()->flashRequest();

    // redirect
    header('Location: edit.php?id='.$id);

    // don't proceed with the rest of this script
    exit();
}

// update data from request
$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;
// ...

// somehow save the data into the database (using the unique ID)
update($id, $song);

Session::instance()->flash('success_message', 'Song successfully updated.');

// redirect to edit
header('Location: edit.php?id=' . $id);