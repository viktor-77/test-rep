<!--Давайте теперь сделаем движок сайта, в котором контент страниц будет хранится не в файлах, а в базе данных-->
<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');


$url = $_SERVER['REQUEST_URI'];
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'mydb';      // имя базы данных
$link = mysqli_connect($host, $user, $pass, $name);
$layout = file_get_contents('layout.php');

preg_match('#/page/(\d+)#', $url, $match);
$id = $match[1];

$query = "SELECT * FROM pages WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$page = mysqli_fetch_assoc($result);
if ($page) {
    $layout = str_replace('{{title}}', $page['title'], $layout);
    $layout = str_replace('{{content}}', $page['content'], $layout);
    echo $layout;
} else {
    $error_file = file_get_contents('view/404.php');
    header('HTTP/1.0 404 Not Found');
    echo $error_file;
}
