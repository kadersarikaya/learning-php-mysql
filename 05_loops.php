<?php

// for loop

// for ($x = 0; $x <= 10; $x++) {
//     echo 'Number ' .  $x . '<br>';
// }
//

// While loop

$x = 1;

// while($x<=15) {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// }

// Do while

// $x = 6;
// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while($x<=5);

// foreach

$posts = ['First Post', 'Second Post', 'Third Post', 'Fourth Post'];

// for($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x] . '<br>';
// }

// foreach($posts as $index => $post) {
//     echo $index + 1 . '-' . $post . '<br>';
// }

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'vrad@gmail.com',
];

foreach($person as $key => $value) {
    echo $key . ' - ' . $value . '<br>';
}

?>