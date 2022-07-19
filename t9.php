<!--Сделайте класс Sphere, который будет реализовывать интерфейс iSphere.-->

<?php

interface iSphere
{
    const PI = 3.14; // число ПИ как константа

    // Конструктор шара:
    public function __construct($radius);

    // Метод для нахождения объема шара:
    public function getVolume();

    // Метод для нахождения площади поверхности шара:
    public function getSquare();
}

class Sphere implements iSphere
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getVolume()
    {
        return 3 / 4 * self::PI * $this->radius ** 3;
    }

    public function getSquare()
    {
        return 4 * self::PI * $this->radius;
    }
}
