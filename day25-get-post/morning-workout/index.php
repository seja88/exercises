<?php
// for returning just one fact
$data = [
    'fact' => "Jaguars are the only big cats that don't roar.",
    'length' => 46,
];

// for returning multiple facts
$data = [
    'data' => [
        [
            'fact' => "Jaguars are the only big cats that don't roar.",
            'length' => 46,
        ],
        [
            'fact' => "Dogs are better than cats",
            'length' => 30,
        ],
        [
            'fact' => "Cats can be cute",
            'length' => 20,
        ],
    ],
];


// two random facts (can be repeated)
$result_data = ['data' => []];

for ($i = 1; $i <= 2; $i++) {
    $random_index = rand(0,2);
    $result_data['data'][] = $data['data'][$random_index];
}

$data = $result_data;

echo json_encode($data);