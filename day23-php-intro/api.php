<?php

// TODO:
// contact a database to select current tasks

$tasks = [
    'Understand PHP\'s role',
    'Learn PHP',
    'Get a PHP job',
    'Profit!'
];

header('Content-type: application/json');

echo json_encode($tasks);