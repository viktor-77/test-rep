<!--Пусть у вас есть сайт с юзерами. Сделайте страницу для показа одного юзера, страницу для вывода всех юзеров и страницу с формой для добавления нового юзера.-->
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
if($page){
    $layout = file_get_contents('layout.php');
    $layout = str_replace('{{title}}', $page['title'], $layout);
    $layout = str_replace('{{content}}', $page['content'], $layout);
    echo $layout;
} else {
    $error_file = file_get_contents('view/404.php');
    header('HTTP/1.0 404 Not Found');
    echo $error_file;
}

