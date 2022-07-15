<!--Сделайте класс Disk (круг), реализующий интерфейс Figure.-->
<?php

interface Figure
{
    public function getSquare();

    public function getPerimeter();
}

class Disk implements Figure
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getSquare()
    {
        return round((pi() * $this->radius ** 2), 1);
    }

    public function getPerimeter()
    {
        return round((2 * pi() * $this->radius), 1);
    }
}

echo (new Disk(5))->getPerimeter();