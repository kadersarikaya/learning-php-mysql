<?php
//echo - Output strings, numbers, html, etc
// echo 123, "Hello!", 10.5;

// print - Works like echo, but only outputs one argument
// print 123;

// print_r() - Prints single values and arrays
// print_r([1, 2, 3]);

// var_dump() - Returns more info like data type and length
// var_dump(true);

// var_export() - Similar to var_dump(), but returns valid PHP code
// var_export(true); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?= "Hello World!"; ?>
    </h1>
</body>
</html>