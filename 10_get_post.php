<?php

if(isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}

echo $_POST['name'];
echo $_POST['age'];
?>
<!-- 
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name
=tilki&age=22">Click</a> -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="submit" value="Send">
</form>


