<?php

if ($_POST['email'] == 'jan.polak@data4you.cz'
    && $_POST['password'] == 'love'
) {
    // if the incoming information matches known
    // user credentials (typically stored ENCODED
    // in the database)

    // sign-in the user
    session_start();

    // put the ID of the logged in user into the session
    $_SESSION['logged-in-user'] = 1;

}

header('Location: sessions.php');