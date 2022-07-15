<!--Сделайте интерфейс iCube, который будет описывать фигуру Куб. Пусть ваш интерфейс описывает конструктор,
 параметром принимающий сторону куба, а также методы для получения объема куба и площади поверхности.-->
<!--Сделайте класс Cube, реализующий интерфейс iCube.-->

<?php

interface ICube
{
    public function __construct(int $sideWidth);

    public function getSquare(): int;

    public function getPerimeter(): int;
}

class Cube implements ICube
{
    private $sideWidth;

    public function __construct(int $sideWidth)
    {
        $this->sideWidth = $sideWidth;
    }

    public function getSquare(): int
    {
        return $this->sideWidth ** 3;
    }

    public function getPerimeter(): int
    {
        return $this->sideWidth * 3;
    }

}