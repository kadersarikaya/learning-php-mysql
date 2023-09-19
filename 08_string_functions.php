<?php

$string = "Hello World";

// get length of string
echo strlen($string);

// find the position of a word
echo strpos($string, 'o');

//find the position of the last occurence of a word
echo strrpos($string, 'o');

// trim white space
$string2 = "   Hello World   ";
echo trim($string2);

// reverse a string
echo strrev($string);

// make a string all uppercase
echo strtoupper($string);

// make a string all lowercase
echo strtolower($string);

// replace a word in a string
echo str_replace('World', 'Everyone', $string);

//uppercase the first letter of each word
echo ucwords($string);

// string replacement
$phrase = "I like the color red";
$phrase = str_replace('red', 'blue', $phrase);
echo $phrase;

// return only a portion of a string
$string = "Hello World";
echo substr($string, 0, 5);

//ENDS with
if(str_ends_with($string, 'World')){
    echo 'true';
} else {
    echo 'false';
}

$string2 = '<h1>Hello</h1>';
// echo $string2;
echo htmlspecialchars($string2);

printf('%s likes to %s', 'Brad', 'code');
printf('1+1=%f', 1+1);