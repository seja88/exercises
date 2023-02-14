<?php

require_once 'DBBlackbox.php';
require_once 'Session.php';
require_once 'Song.php';

// get the id from the URL
$id = $_GET['id'];

// in some way delete a record from the database
delete($id);

Session::instance()->flash('success_message', 'Song was deleted.');

// redirect to list of songs
header('Location: list.php');