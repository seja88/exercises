<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

// retrieve all songs from the database
$songs = select(null, null, 'Song');

?>

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