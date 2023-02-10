<?php

var_dump($_GET);
echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";


// if (!empty($_GET['name'])) {
//     echo "Your name is {$_GET['name']}, cool name";
// } else {
//     echo "You didn't provide any name!";
// }
// echo "<br>";

// $kids_provided = isset($_GET['kids']) && $_GET['kids'] !== '';

// if ($kids_provided) {
//     echo "Your have {$_GET['kids']} kids";
// } else {
//     echo "You didn't say how many kids you have!";
// }
// echo "<br>";

// $name = $_GET['name'] ?? 'Jane Doe';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_GET['page'] ?? null == 'old') :?>
        <?php include "index-morning.php" ?>
    <?php else :?>
        <?php include "default.php" ?>
    <?php endif ?>
</body>
</html>
