<?php
/**
 * provides the start of the HTML document
 *
 * This is a very crude and simple way to provide the same
 * HTML document header to all the other files
 *
 * Note that in the future, with more knowledge, there
 * will be much better and powerful ways to do this.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $document_title ?? 'Document' ?></title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
