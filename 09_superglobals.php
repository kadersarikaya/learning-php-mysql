<?php

// Superglobals - built in variables that are always available in all scopes

/* $_GET - contains all info variables passed to the current script via the URL parameters or a form
$_POST - contains all info variables passed to the current script via the HTTP POST method
$_COOKIE - contains all info variables passed to the current script via HTTP cookies
$_SESSION - contains all info variables available to the current script
$_SERVER - contains info such as headers, paths, and script locations
$_ENV - contains all info variables passed to the current script via the environment method
$_FILES - contains all info variables passed to the current script via HTTP post file uploads
$_REQUEST - contains all info variables passed to the current script via HTTP request
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li>Document Root:<?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
        <li>
            Server Name: <?php echo $_SERVER['SERVER_NAME']; ?>
        </li>
        <li>
            Server Port: <?php echo $_SERVER['SERVER_PORT']; ?>
        </li>
        <li>
            Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?>
        </li>
        <li>
            Request URI: <?php echo $_SERVER['REQUEST_URI']; ?>
        </li>
        <li>
            Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?>
        </li>
        <li>
            Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
        </li>
        <li>
            Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?>
        </li>
        <li>
            Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?>
        </li>
    </ul>
</body>
</html>