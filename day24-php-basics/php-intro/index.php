<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>HI!!!</h1>";
        $my_variable;       // defined, but not assigned a value, generally no reason to do this
        $a = 1;
        $a = 5;             // assign a different value into a variable currently containing a value (behaves like "let" variables in JS)
        echo $a;

        function sayNumber()
        {
            // global variable $a is NOT accesible here - echo $a would fail (trigger a warning that $a is undefined)
            echo "Number<br>";
        }

        // unset($a);  // removes the variable and its value

        sayNumber();

        define('MY_CONSTANT', 'My lovely constant<br>');

        function sayMyConstant()
        {
            echo MY_CONSTANT;
            define('MY_SECOND_CONSTANT', "Second!<br>");
        }

        sayMyConstant();

        echo MY_SECOND_CONSTANT;

        function raiseNumber($number)
        {
            $result = $number+1;
            return $result;
        }

        echo raiseNumber(5);
        echo "<br>";
    ?>

    <?php echo ("Umm, hi? \n") ?>

    <?= "Umm, hi?" ?>

    <hr>

    <?php
        echo "<div>Footer {$a}</div>";
        echo round(34.435345);              // "math" function, but unlike in JS, not implemented as a method of Math object (Math.round)
        echo "<br>";
    ?>

    <?php

    function outer($a)
    {
        echo "outer<br>";
        inner($a);
    }

    function inner($b)
    {
        echo "{$b} - inner<br/>";
    }

    outer(4);

    echo "<br>";

    $a = 0;

    // passing by value, only makes a copy - behaves like non-arrays and non-objects in JS
    function echoLargerByOne($num)
    {
        $result = $num + 1;
        echo $result;
    }

    echoLargerByOne($a);
    echo "<br>";
    echo $a;                // $a is intact - 0

    // passing by reference, can be forced by adding the & character in the function definitions,
    // works with actual variable, not a copy, behaves like arrays and objects in JS
    function raiseByOne(&$num)
    {
        $num++;
    }

    raiseByOne($a);
    echo "<br>";
    echo $a;                // as was raised - 1

    function raise(&$num, $by=1)
    {
        $num = $num + $by;
    }

    raise($a);
    echo "<br>";
    echo $a;

    raise($a, 6);
    echo "<br>";
    echo $a;

    function sayA()
    {
        // way to make the global variable available inside a function, even though it isn't by default
        global $a;

        echo "<br>";
        echo $a;
    }

    sayA();

    function headline($header,$priority = 1)
    {
        $result = "<h{$priority}>{$header}</h{$priority}>";
        return $result;
    }

    echo headline('Foo', 2);        // <h2>Foo</h2>
    echo headline('Bar');           // <h1>Bar</h1>

    // automatically assigned numeric keys, in its meaning, equivalent to JS array
    $a = [1, 2, 3];
    // equivalent to
    // $a = [
    //     0 => 1,
    //     1 => 2,
    //     2 => 3,
    // ]
    echo $a[0];

    // associative arrays with explicitly defined string keys, in its meaning equivalent to JS object when it's used to store data
    // unline JS object, cannot have methods, though. That functionality is reserved for actual objects (more on that later)
    $dog = [
        'breed' => 'dachshund',
        'color' => 'black and grey',
        'name' => 'Muffin',
    ];

    echo "<br>";
    echo $dog["breed"];

    echo "<br>";
    $a[0] = 10;
    echo $a[0];

    array_push($a, 4);
    echo "<br>";
    echo $a[3];

    $a[] = 5;
    echo "<br>";
    echo $a[4];

    // $dog['age'] = 4;
    // echo "<br>";
    // echo $dog['age'];

    echo "<br>";
    echo "<br>";
    var_dump($dog);

    echo "<br>";
    $owner_is_set = isset($dog["owner"]);
    $owner_is_empty = !empty($dog["owner"]); // can see less use than isset
    var_dump($owner_is_set);
    var_dump($owner_is_empty);

    foreach ($dog as $dog_property => $property_value) {
        echo "<p>Dog's {$dog_property} is {$property_value}</p>";
    }

    // print the values in an order different from the order they are in in the array
    // specified order
    // $order = [
    //     'age',
    //     'color',
    //     'owner',
    //     'name',
    //     'breed',
    // ];
    // foreach ($order as $value) {
    //     echo "<p>Dog's {$value} is {$dog[$value]}</p>";
    // }

    // sort the array by number of letters a in the value
    uasort($dog, function ($a, $b) {
        $count_of_as_in1 = substr_count($a,'a');
        $count_of_as_in2 = substr_count($b,'a');

        if ($count_of_as_in1 < $count_of_as_in2) {
            return -1;
        } elseif ($count_of_as_in1 == $count_of_as_in2) {
            return 0;
        } elseif ($count_of_as_in1 > $count_of_as_in2) {
            return 1;
        }
    });

    var_dump($dog);

    // demo of array merge of arrays with containing the same key (value from the second array is used for the result)
    $merged_array = array_merge([
        'name' => 'a',
        'age' => 5
    ], [
        "color" => 'red',
        "age" => 6
    ]);
    var_dump($merged_array);
    ?>

</body>
</html>