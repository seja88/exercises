<?php

// @TODO no.1 replace following functions with only one more general function.
// have you heard about DRY principal? DRY stands for don't repeat yourself
// if you don't know the syntax for modulo operator, you can check it at https://www.php.net/manual/en/language.operators.arithmetic.php
// think of the parameters for the new function

//function isMultipleOf3(int $number): bool
//{
//    return ($number % 3) === 0;
//}
//
//function isMultipleOf5(int $number): bool
//{
//    return ($number % 5) === 0;
//}
//
//function isMultipleOf8(int $number): bool
//{
//    return ($number % 8) === 0;
//}
//
//function isMultipleOf15(int $number): bool
//{
//    return ($number % 15) === 0;
//}

function isMultipleOf(int $number, int $divisor): bool {
    return ($number % $divisor) === 0;
}

$myNumber = 15;

var_dump($myNumberIsMultipleOf3 = isMultipleOf($myNumber, 3));
$myNumberIsMultipleOf3 = isMultipleOf($myNumber, 3);
$myNumberIsMultipleOf5 = isMultipleOf($myNumber, 5);
$myNumberIsMultipleOf8 = isMultipleOf($myNumber, 8);
$myNumberIsMultipleOf15 = isMultipleOf($myNumber, 15);


// @TODO no.2
function greatestDivisor(int $number): ?int
{
    // Implement this function which will give you the greatest divisor for any positive number.
    // Do not return 1 or the number itself. if the number is prime number, return null.
    // For example for number 3 you should return null, for number 8 you should return 4.

    for ($i = floor($number / 2); $i > 1; $i--) {
        if ($number % $i === 0) {
            return $i;
        }
    }

    return null;
}

echo('@TODO no.2');
echo('<br />');
echo('<br />');

echo('greatest divisor for number 3 is: ' . (greatestDivisor(3) ?? '--- (prime number)'));
echo('<br />');
echo('greatest divisor for number 8 is: ' . (greatestDivisor(8) ?? '--- (prime number)'));
echo('<br />');
echo('greatest divisor for number 15 is: ' . (greatestDivisor(15) ?? '--- (prime number)'));
echo('<br />');
echo('greatest divisor for number 99 is: ' . (greatestDivisor(99) ?? '--- (prime number)'));
echo('<br />');
echo('greatest divisor for number 100 is: ' . (greatestDivisor(100) ?? '--- (prime number)'));
echo('<br />');
echo('<br />');



// @TODO no.3 Fix the bugs
// The following code generate two dimensional array representing a chess board (0 and 1 represent black and white squares). You can check the result in browser.

// First, try to make next lines as readable as possible, fix the formatting, indents, spaces around operators etc. but do not change the logic.
// Once the code is readable, there are two problems you should fix. The first one is that all the rows are the same, but it should alternate.


$board = [];

for ($i = 0; $i < 8; $i++) {
    $row = [];

    for ($j = 0; $j < 8; $j++) {
//        if (($i % 2) === 0) {
//            $row[] = ($j % 2) === 0 ? 1 : 0;
//        } else {
//            $row[] = ($j % 2) === 0 ? 0 : 1;
//        }

        $row[] = (($j + $i) % 2) === 0 ? 0 : 1;
    }

    $board[] = $row;
}



// @TODO no.4 You can use html template with some css to display good looking chessboard. Use grid, flex or any other approach.
echo('@TODO no.3 + 4');
echo('<br />');
echo('<br />');

echo ('<div>');

foreach ($board as $row) {
    echo ('<div>');

    foreach ($row as $square) {
        echo ('<span>' . $square . '</span>');
    }

    echo ('</div>');
}

echo ('</div>');

