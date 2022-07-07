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

preg_match('#/page/(\d+)#', $url, $match);
$id = $match[1];

$query  = "SELECT * FROM pages WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$page   = mysqli_fetch_assoc($result);

$layout = file_get_contents('layout.php');
$layout = str_replace('{{title}}', $page['title'], $layout);
$layout = str_replace('{{content}}', $page['content'], $layout);

echo $layout;