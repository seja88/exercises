<?php
    require_once "DBBlackbox.php";

    // var_dump($_GET);

    if (isset($_GET["name"]) && isset($_GET["rating"])) {
        $data = [
            'name' => $_GET["name"],
            'rating' => $_GET["rating"],
        ];
        // var_dump($_GET);
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            update($id, $data);
        } else {
            $id = insert($data);
        }
        // var_dump($id);
    }

    $prefill_data = [
        'id' => null,
        'name' => null,
        'rating' => null,
    ];

    if (isset($_GET["id"])) {
        // echo "We will be editing";
        $prefill_data = find($_GET["id"]);
    }
    // var_dump($prefill_data);
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
    <h2>Create/Edit form</h2>

    <form action="" method="get">
        <?php if($prefill_data['id'] != null) : ?>
            <input type="hidden" name="id" value="<?= $prefill_data['id'] ?>">
        <?php endif;?>
        Name: <input type="text" name="name" id="" value="<?= $prefill_data["name"] ?>"><br>
        Rating: <input type="number" name="rating" id="" value="<?= $prefill_data["rating"] ?>"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>