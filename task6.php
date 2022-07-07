<!--Реализуйте в вашем движке отдачу страницы с 404 ошибкой.-->
<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');


$url = $_SERVER['REQUEST_URI'];
$path = 'view' . $url . '.php';
$layout = file_get_contents('layout.php');

if (file_exists($path)) {
    $content = file_get_contents($path);
    preg_match('#{{ title: "(.+?)" }}#', $content, $match);
    $title = $match[1];
    $content = preg_replace('#{{ title: "(.+?)" }}#', '', $content);
    $layout = str_replace('{{title}}', $title, $layout);
    echo $layout = str_replace('{{content}}', $content, $layout);
} else {
    $error_file =file_get_contents('view/404.php');
    header('HTTP/1.0 404 Not Found');
    echo $error_file;
}

