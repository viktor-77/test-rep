<!--Сделайте класс City, в котором будут следующие свойства: name, population (количество населения).-->
<!--Создайте 5 объектов класса City, заполните их данными и запишите в массив.-->
<!--Переберите созданный вами массив с городами циклом и выведите города и их население на экран.-->

<?php
require_once 'City.php';

$cities = [];

$cities[] = new City('aaa', 111);
$cities[] = new City('bbb', 222);
$cities[] = new City('ccc', 333);
$cities[] = new City('ddd', 444);
$cities[] = new City('eee', 555);

foreach ($cities as $city) {
    echo 'The city of ' . $city->name . ' / ' . 'population: ' . $city->population . '<br>';
}
