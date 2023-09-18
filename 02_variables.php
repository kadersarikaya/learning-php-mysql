<?php
//  String          Series of characters
// Integer         Whole numbers
// Float           Decimal numbers
// Boolean         True or False
// Array           Multiple values
// Object          Instance of a class
// Null            No value
// Resource        External resource

// Variable Rules

// - Prefix with $
// - Start with a letter or an underscore
// - Only letters, numbers and underscores
// - Case sensitive
// - No spaces


$name = 'Yoshi';
$age = 30;
$has_hobbies = true;
$cash_on_hand = 20.50;

echo "$name is $age years old.";

echo '5' + '5';
$x = '5' + '5';
var_dump($x);
echo 10 - 5;
echo 10 * 5;
echo 10 / 5;

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;


?>
