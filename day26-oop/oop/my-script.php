<?php

require_once 'Spaceship.php';

$enterprise = new Spaceship('USS Enterprise');

$enterprise->setPosition('Earth');
$enterprise->setDirection('Jupiter');
$enterprise->setCruisingSpeed(10);

function chooseShip(Spaceship $ship)
{
    echo 'You\'ve chosen '.$ship->getName();
}

chooseShip($enterprise);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document of spaceship "<?= $enterprise->getName() ?>"</title>
</head>
<body>

    <h1><?= $enterprise->getName() ?></h1>

    <ul>
        <li>
            <strong>Orbiting</strong> <?= $enterprise->position; ?>
        </li>
        <li>
            <strong>Heading for</strong> <?= $enterprise->direction; ?>
        </li>
        <li>
            <strong>at the speed of </strong> <?= $enterprise->getCruisingSpeed('miles'); ?>
                                                <!-- 22500000 mph -->

                                              <?= $enterprise->getCruisingSpeed('km'); ?>
                                                <!-- 10000 km/s -->
        </li>
    </ul>

</body>
</html>