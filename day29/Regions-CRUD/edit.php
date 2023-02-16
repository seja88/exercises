<?php

require_once 'DB.php';
require_once 'Session.php';
require_once 'helpers.php';
require_once 'Region.php';

$successMessage = Session::instance()->get('success_message');
$errors = Session::instance()->get('errors', []);

$id = $_GET["id"] ?? null;

if (isset($id)) {
    DB::connect('localhost', 'world', 'root', 'rootroot');
    $region = DB::selectOne("SELECT * FROM `regions` WHERE `id` = ?", [$id], Region::class);

    if ($region === false) {
        echo 'Region with id ' . $id . ' not found.';
        exit();
    }
} else {
    $region = new Region();
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Region</title>
    </head>

    <body>
        <?php if ($successMessage) : ?>
            <div class="message message_success">
                <?= $successMessage ?>
            </div>
        <?php endif; ?>

        <?php foreach ($errors as $error) : ?>
            <div class="message message_error">
                <?= $error ?>
            </div>
        <?php endforeach; ?>

        <?php if (isset($id)) : ?>
            <form action="save.php?id=<?= $region->id ?>" method="post">
        <?php else : ?>
            <form action="save.php" method="post">
        <?php endif; ?>
                <label>Name:</label>
                <input type="text" name="name" value="<?= old('name', $region->name) ?>" />

                <label>Slug:</label>
                <input type="text" name="slug" value="<?= old('slug', $region->slug) ?>" />

                <br/>
                <button>Save</button>

                <?php if (isset($id)) : ?>
                    <a href="delete.php?id=<?= $region->id ?>">
                        <button type="button">Delete</button>
                    </a>
                <?php endif; ?>

                <br/>
                <a href="index.php">
                    <button type="button">Back</button>
                </a>
            </form>
    </body>
</html>
