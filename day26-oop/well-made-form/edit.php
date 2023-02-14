<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

// find the ID of the record we want to edit in the request
$id = $_GET['id'];

// somehow retrieve existing song from some storage
$song = find( $id, 'Song' );

?>
<form action="update.php?id=<?= $id ?>" method="post">

    <!-- display the form prefilled with entity data -->

    Name:<br>
    <input type="text" name="name" value="<?= htmlspecialchars((string)$song->name) ?>"><br>
    <br>

    Author:<br>
    <input type="text" name="author" value="<?= htmlspecialchars((string)$song->author) ?>"><br>
    <br>

    Length:<br>
    <input type="number" name="length" value="<?= htmlspecialchars((string)$song->length) ?>"> seconds<br>
    <br>

    Album:<br>
    <input type="text" name="album" value="<?= htmlspecialchars((string)$song->album) ?>"><br>
    <br>

    <button type="submit">Save</button>

</form>