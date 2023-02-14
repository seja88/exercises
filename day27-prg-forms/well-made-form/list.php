<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

// start the session
session_start();

// extract the success message from the session
$success_message = $_SESSION['success_message'] ?? null;

// delete the success message from the session
unset($_SESSION['success_message']);

// retrieve all songs from the database
$songs = select(null, null, 'Song');

?>

<?php include 'top-menu.php'; ?>

<?php if ($success_message) : ?>

<style>
    .success-message {
        background-color: lightgreen;
        padding: 1em;
        border: 1px solid green;
    }
</style>
<div class="success-message">
    <?= $success_message ?>
</div>

<?php endif; ?>

<ul>

    <?php foreach ($songs as $song) : ?>

        <li>
            <?= $song->name ?>
            (<?= $song->getLengthFormatted() ?>)

            <a href="edit.php?id=<?= $song->id ?>">edit</a>

            <form
                action="delete.php?id=<?= $song->id ?>"
                method="post"
                onsubmit="if (!confirm('Do you really want to delete this?')) return false;"
            >
                <button>Delete</button>
            </form>
        </li>

    <?php endforeach; ?>

</ul>