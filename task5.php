<!--Реализуйте в вашем движке тайтлы, хранящиеся в контенте страницы.-->
<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');


$url = $_SERVER['REQUEST_URI'];
$layout = file_get_contents('layout.php');

if (file_exists('view' . $url . '.php')) {
    $content = file_get_contents('view' . $url . '.php');
    preg_match('#{{ title: "(.+?)" }}#', $content, $match);
    $title = $match[1];
    $content = preg_replace('#{{ title: "(.+?)" }}#', '', $content);
    $layout = str_replace('{{title}}', $title, $layout);
    echo $layout = str_replace('{{content}}', $content, $layout);
} else {
    $layout = str_replace('{{title}}', 'default title', $layout);
    echo $layout = str_replace('{{content}}', '!!content is empty!!', $layout);
}

