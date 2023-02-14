<?php

session_start();

var_dump( $_SESSION );

// unset($_SESSION['start']);


?>

<?php if (isset($_SESSION['logged-in-user'])) : ?>

    User #<?= $_SESSION['logged-in-user'] ?> is logged in.

    <form action="logout.php" method="post">
        <button>Log out</button>
    </form>

<?php else : ?>

    <form action="log-in.php" method="post">

        Email:<br>
        <input type="email" name="email">
        <br>

        Password:<br>
        <input type="password" name="password">
        <br>

        <button>Log in</button>

    </form>

<?php endif; ?>