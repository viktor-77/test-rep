<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'mydb';      // имя базы данных
$link = mysqli_connect($host, $user, $pass, $name);

$url = $_SERVER['REQUEST_URI'];
if (preg_match('#/page/([a-z0-9_-]+)#', $url, $params)) {
    $page = include 'view/page/show.php';
}

if (preg_match('#/page/all#', $url, $params)) {
    $page = include 'view/page/all.php';
}

if (preg_match('#/page/add#', $url, $params)) {
    $page = include 'view/page/add.php';
} elseif (is_array($page)) {
        $layout = file_get_contents('layout.php');
        $layout = str_replace('{{title}}', $page['title'], $layout);
        $layout = str_replace('{{content}}', $page['content'], $layout);
        echo $layout;
    } else {
        $error_file = file_get_contents('view/404.php');
        header('HTTP/1.0 404 Not Found');
        echo $error_file;
    }

