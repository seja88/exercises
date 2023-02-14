<?php

// start session so that we have access to $_SESSION
session_start();

// delete information about a user being
// logged in from the session
unset($_SESSION['logged-in-user']);

// redirect
header('Location: sessions.php');