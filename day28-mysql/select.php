<?php

require_once 'DB.php';
require_once 'Country.php';

DB::connect(
    '127.0.0.1',    // host
    'world',        // database
    'root',         // username
    ''              // password
);

$continent = $_GET['continent'] ?? 'Europe';

$continents = DB::select("
    SELECT *
    FROM `continents`
    ORDER BY `name` ASC
");

$results = DB::select("
        SELECT *
        FROM `countries`
        WHERE `population` > ?
        AND `continent` = ?
        ORDER BY `name` ASC;
    ",
    [
        20000000,
        $continent
    ],
    'Country'
);

// header('Content-type: application/json');
// echo json_encode($results);
// exit();

// var_dump($results);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Most populous countries in <?= $continent ?></title>
</head>
<body>

    <nav>
        <?php foreach ($continents as $one_continent) : ?>
            <a href="?continent=<?= $one_continent->name ?>">
                <?= $one_continent->name ?>
            </a>
        <?php endforeach; ?>
    </nav>

    <h1>Most populous countries in <?= $continent ?></h1>

    <ul>
        <?php foreach ($results as $country) : ?>
            <li>
                <?= $country->name ?>
                (capital: <?= $country->getCapitalCity()->name ?>)
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>