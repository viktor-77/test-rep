<!--Сделайте интерфейс Figure3d (трехмерная фигура), который будет иметь метод getVolume (получить объем)
и метод getSurfaceSquare (получить площадь поверхности).-->
<!--Сделайте класс Cube, который будет реализовывать интерфейс Figure3d.-->

<!--Создайте несколько объектов класса Quadrate, несколько объектов класса Rectangle
и несколько объектов класса Cube. Запишите их в массив $arr в случайном порядке.-->

<?php

interface Figure3d
{
    public function getVolume(int $length, int $width, int $height): int;

    public function getSurfaceSquare(int $length, int $width, int $height): int;
}

class Cube implements Figure3d
{
    private $length;
    private $width;
    private $height;

    public function getVolume(int $length, int $width, int $height): int
    {
        return $height * $length * $width;
    }

    public function getSurfaceSquare(int $length, int $width, int $height): int
    {
        return 2 * $height * $length + 2 * $height * $width + 2 * $length * $width;
    }
}

class Quadrate
{
    private $sideLength;

    public function __construct(int $sideLength)
    {
        $this->$sideLength = $sideLength;
    }
}

class Rectangle
{
    private $height;
    private $width;

    public function __construct(int $height, int $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
}

$arr = [
    new Quadrate(10),
    new Quadrate(20),
    new Rectangle(10, 20),
    new Rectangle(20, 30),
    new Cube(),
    new Cube(),
    new Cube(),
];

foreach ($arr as $el) {
    if ($el instanceof Figure3d) {
        echo $el->getSurfaceSquare(10, 40, 50) . '<br>';
    }
}