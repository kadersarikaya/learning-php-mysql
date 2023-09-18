<?php

//Single array
$numbers = [1,44,55,22];
$fruits = array('Apple', 'Banana', 'Orange');

// var_dump($numbers);

//echo $fruits[1];

//Associative array

$colors = [
    1 => 'Red',
    2 => 'Blue',
    3 => 'Green'
];

// echo $colors[2];

$hex = [
    'Red' => '#ff0000',
    'Blue' => '#0000ff',
    'Green' => '#00ff00'
];

//echo $hex['Red'];

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

// echo $person['first_name'];

$people = [
    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com'
    ],
    [
        'first_name' => 'Sara',
        'last_name' => 'Watson',
        'email' => 'watson@gmail.com'
    ]
];

// echo $people[1]['email'];

var_dump(json_encode($people));