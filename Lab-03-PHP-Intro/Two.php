<?php

function testNumber($number) {
    if ($number > 30 || $number > 20 || $number > 10) {
        return true;
    } else {
        return false;
    }
}

// Test the function with some examples
$number1 = 40;
// $number2 = 15;
// $number3 = 5;

echo "Is $number1 greater than 30, 20, or 10? " . (testNumber($number1) ? "Yes" : "No");

// echo "Is $numb0er2 greater than 30, 20, or 10? " . (testNumber($number2) ? "Yes" : "No");

// echo "Is $number3 greater than 30, 20, or 10? " . (testNumber($number3) ? "Yes" : "No");



?>