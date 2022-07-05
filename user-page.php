<a href="user-page.php?show_name=<?php echo empty($_GET['show_name'])?>">show name</a>
<?php
session_start();
if ($_GET['show_name']) {
    echo $_SESSION['name'];
}

$user_name = $_SESSION['name'];
echo "hi  auth was correct" . "<br>";