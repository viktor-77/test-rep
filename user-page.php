<a href="user-page.php?show_name=
    <?= empty($_GET['show_name']) ?>">
    show name
</a><br>
<?php
session_start();
if ($_GET['show_name']) {
    echo 'Your user name: <b>' . $_SESSION['name'] . "</b><br>";
}

$user_name = $_SESSION['name'];
echo "Hi  <u>auth</u> was success!";