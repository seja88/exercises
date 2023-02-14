<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

// start the session
session_start();

// get the id from the URL
$id = $_GET['id'];

// in some way delete a record from the database
delete($id);

$_SESSION['success_message'] = 'Song was deleted.';

// redirect to list of songs
header('Location: list.php');