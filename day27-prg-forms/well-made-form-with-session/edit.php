<?php

require_once 'DBBlackbox.php';
require_once 'helpers.php';
require_once 'Session.php';
require_once 'Song.php';

// find the ID of the record we want to edit in the request
$id = $_GET['id'];

// somehow retrieve existing song from some storage
$song = find( $id, 'Song' );

?>

<?php include 'top-menu.php'; ?>

<?php include 'alerts.php'; ?>

<form action="update.php?id=<?= $id ?>" method="post">

    <!-- display the form prefilled with entity data -->

    Name:<br>
    <input type="text" name="name" value="<?= htmlspecialchars((string)old('name', $song->name)) ?>"><br>
    <br>

    Author:<br>
    <input type="text" name="author" value="<?= htmlspecialchars((string)old('author', $song->author)) ?>"><br>
    <br>

    Length:<br>
    <input type="number" name="length" value="<?= htmlspecialchars((string)old('length', $song->length)) ?>"> seconds<br>
    <br>

    Album:<br>
    <input type="text" name="album" value="<?= htmlspecialchars((string)old('album', $song->album)) ?>"><br>
    <br>

    <button type="submit">Save</button>

</form>