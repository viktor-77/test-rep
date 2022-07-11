<!--Сделайте класс Rectangle, в котором в свойствах будут записаны ширина и высота прямоугольника.-->
<!--В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.-->
<!--В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.-->
<?php

class Rectangle
{
    public $width;
    public $height;

    public function getSquare(): int
    {
        return $this->height * $this->width;
    }

    public function getPerimeter(): int
    {
        return $this->height + $this->width;
    }
}
