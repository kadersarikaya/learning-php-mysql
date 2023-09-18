<?php

$age = 17;

// if($age >= 18){
//     echo 'Old enough';
// } else {
//     echo 'Not old enough';
// }

$t = date('H');

if($t < '10'){
    echo 'Have a good morning';
} elseif($t < '20'){
    echo 'Have a good day';
} else {
    echo 'Have a good night';
}

$posts = ['First Post', 'Second Post', 'Third Post'];

// if(!empty($posts)){
//     echo 'There are posts ';
// } else {
//     echo 'There are no posts ';
// }

// echo !empty($posts) ? $posts[0] : 'No Posts';

// $firstPost = !empty($posts) ? $posts[0] : 'no posts';

$firstPost = $posts[0] ?? 'no posts';

// echo $firstPost;

$favcolor = 'red';

switch($favcolor){
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is something else';
}

?>