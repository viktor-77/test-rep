<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');

spl_autoload_register(function ($class) {
    $filename = str_replace('\\', '/', $class) . '.php';
    require($filename);
});

new Dir1\Class1;
new Dir2\Class2;