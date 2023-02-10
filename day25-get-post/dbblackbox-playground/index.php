<?php
    // define('DATA_FILE_LOCATION');
    require_once "DBBlackbox.php";
?>

<h1>DBBlackbox Index</h1>

<?php


    $my_data = [
        'first_name' => 'john',
        'last_name' => 'doe',
    ];

    $my_data = $_GET;
    $id = insert($my_data);
    // $data = find(1);
    // echo "The name is {$data['first_name']}<br>";
    // $data = select(1);
    // echo "The name is {$data[1]['first_name']}<br>";
?>