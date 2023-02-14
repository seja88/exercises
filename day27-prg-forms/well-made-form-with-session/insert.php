<?php

require_once 'DBBlackbox.php';
require_once 'helpers.php';
require_once 'Session.php';
require_once 'Song.php';

// prepare empty entity
$song = new Song;

// update entity from request
$song->name = $_POST['name'] ?? $song->name;
// same as line above:
// if (isset($_POST['name'])) {
//     $song->name = $_POST['name'];
// }
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;
// ...

// somehow insert the entity into the database and generate a unique ID
// here done using DBBlackbox
$id = insert($song);

session()->flash('success_message', 'Song successfully inserted.');

// redirect to edit
// edit.php?id=$id
header('Location: edit.php?id=' . $id);