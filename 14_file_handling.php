<?php

// File handling is a way to read and write files on the server.
// It's a good way to store data that you want to persist between sessions.
// For example, you could store a list of users in a file, and then read
// that file to check if a user exists.

$file = 'extras/users.txt';

if(file_exists($file)) {
   // echo readfile($file);
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    fclose($handle);
    echo $data;
}
else {
    $handle = fopen($file, 'w');
    $data = 'John Doe' . PHP_EOL . 'sara Doe' . PHP_EOL;
    fwrite($handle, $data);
    fclose($handle);
}