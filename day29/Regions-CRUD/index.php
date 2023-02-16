<?php

require_once 'DB.php';
require_once 'Region.php';
require_once 'Session.php';

$successMessage = Session::instance()->get('success_message');

DB::connect('localhost', 'world', 'root', 'rootroot');

$data = DB::select("select * from `regions`", [], Region::class);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Regions</title>
</head>

<body>
<?php if ($successMessage) : ?>
    <div class="message message_success">
        <?= $successMessage ?>
    </div>
<?php endif; ?>

<div>
    <a href="edit.php"><button>Create new region</button></a>
    <hr>
    <hr>

    <?php foreach ($data as $region) : ?>
        <h2><?= $region->name ?></h2>
        <h3><?= $region->slug ?></h3>

        <a href="edit.php?id=<?= $region->id ?>"><button>Edit</button></a>
        <hr>
    <?php endforeach; ?>
</div>
</body>
</html>
