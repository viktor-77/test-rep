<!--Реализуйте в вашем движке тайтлы, хранящиеся в массиве.-->
<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$url = $_SERVER['REQUEST_URI'];
$layout = file_get_contents('layout.php');

$titles = require 'titles.php';
if (!empty($titles[$url])){
    $title = $titles[$url];
    $layout = str_replace('{{title}}', $title, $layout);
} else {
    $layout = str_replace('{{title}}', 'default title', $layout);
}


if (file_exists('view' . $url . '.php')) {
    $content = file_get_contents('view' . $url . '.php');
    echo $layout = str_replace('{{ content }}', $content, $layout);
} else {
    echo $layout = str_replace('{{ content }}', '!!content is empty!!', $layout);
}
