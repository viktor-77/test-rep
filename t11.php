<!--Придумайте свое правило автозагрузки и реализуйте его.-->
<?php

spl_autoload_register(function ($class) {
    $filename = str_replace('\\', '/', $class) . '.php';
    $filename = strtolower($filename);

    $arr = explode('/', $filename);
    $arr[count($arr) - 1] = ucfirst($arr[count($arr) - 1]);
    $filename = implode('/', $arr);

    require($filename);
});

new Dir1\Class1;
new Dir2\Class2;