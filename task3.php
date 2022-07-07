<!--Реализуйте описанный движок на файлах.-->
<meta charset="utf-8">
<?php

$url = $_SERVER['REQUEST_URI'];
$layout = file_get_contents('layout.php');

if (file_exists('view' . $url . '.php')) {
    $content = file_get_contents('view' . $url . '.php');
    echo str_replace('{{ content }}', $content, $layout);
} else {
    echo str_replace('{{ content }}', '!!content is empty!!', $layout);
}

