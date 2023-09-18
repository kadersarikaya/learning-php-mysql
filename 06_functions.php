<?php

$y = 12;
function registerUser($email) {
    // global $y;
    // echo $y;
    // $x = 10;
    // echo 'User Registered...';
     echo $email . 'registered';
}

// registerUser("kader@gmail.com ");

function sum($n1 = 4, $n2 = 5) {
    return $n1 + $n2;
}

$number = sum();
// echo $number;

$subtract = function($n1, $n2) {
    return $n1 - $n2;
};

//echo $subtract(10, 5);

$multiply = fn($n1, $n2) => $n1 * $n2; // arrow function

echo $multiply(10, 5);


?>