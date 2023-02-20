<?php

// require all the necessary libraries
// see bootstrap.php for details
require_once 'bootstrap.php';

if (isset($_GET['id'])) {
    // if there is an 'id' parameter in the URL
    // this is EDITING an existing entity

    $album = find($_GET['id'], 'Album');
    $action = 'save.php?id=' . $album->id;
} else {
    // otherwise this is CREATING a new entity

    $album = new Album;
    $action = 'save.php';
}

// include the start of the HTML document
// see document_start.php for details
include 'document_start.php';
?>

<h1>
    <?= $album->id ? 'Edit album #'.$album->id : 'Create a new album' ?>
</h1>

<?php include 'alerts.php' ?>

<form action="<?= $action ?>" method="post">

    Name:<br>
    <input type="text" name="name" value="<?= old('name', $album->name) ?>"><br>
    <br>

    Author:<br>
    <input type="text" name="author" value="<?= old('author', $album->author) ?>"><br>
    <br>

    Year:<br>
    <input type="text" name="year" value="<?= old('year', $album->year) ?>"><br>
    <br>

    <button>Save</button>

</form>


<?php
// include the end of the HTML document
// see document_end.php for details
include 'document_end.php';
?>