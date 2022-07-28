<!--Придумайте свое правило автозагрузки и реализуйте его.-->
<?php

spl_autoload_register(function ($class) {
    $filename = str_replace('\\', '/', $class) . '.php';
    require($filename);
});

new Dir1\Class1;
new Dir2\Class2;
