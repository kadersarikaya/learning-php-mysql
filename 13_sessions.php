
<!-- /* Sessions are a way to store info. (in variables)
to be used across multiple pages.
Unlike cookies, sessions are stored on the server.
*/ -->

<?php
session_start();
if(isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username',
     FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    if($username == 'tilki' && $password == '123456') {
        session_start();
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
        echo 'You are now logged in';
        } else {
            echo 'Wrong credentials';
        }
}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Username</label>
    <input type="text" name="username">
    <label>Password</label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="Submit">
</form>


