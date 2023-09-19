<?php
session_start();
if(isset($_SESSION['username'])) {
    echo 'Welcome ' . $_SESSION['username'];
    echo '<a href="/php-crash/extras/logout.php">Logout</a>';
} else {
    echo 'welcome guest';
    echo '<a href="/php-crash/13_sessions.php">Login</a>';
}