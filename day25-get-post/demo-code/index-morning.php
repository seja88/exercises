<?php

// require_once "./additional-files/functions.php";

// include "./additional-files/second.php";

// echo "<h1>Hello from index</h1>";
// echo hi();

// include_once "./additional-files/first.php";





$a = 3;
$b = [
    'fact' => "Jaguars are the only cats that don't... something",
    'length' => 46,
];

if ($a == 1) {
    echo "<p>one</p>";
} elseif ($a == 2) {
    echo "<p>two</p>";
} elseif ($a == 3) {
    echo "<p>three</p>";
}
echo "<hr/>";
?>

<?php if ($a == 1) :?>
    <p>one</p>
<?php elseif ($a == 2) :?>
    <p>two</p>
<?php elseif ($a == 3) :?>
    <p>three</p>
    <p><?php echo $b["fact"] ?></p>
<?php endif;?>

<?php foreach ($b as $key => $value) :?>
    <p><?= $key ?>: <?= $value?></p>
<?php endforeach; ?>