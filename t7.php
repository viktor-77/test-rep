<!--Сделайте так, чтобы класс Rectangle также реализовывал два интерфейса: и iFigure, и iTetragon-->
<!--Сделайте интерфейс iCircle с методами getRadius и getDiameter.-->
<!--Сделайте так, чтобы класс Disk также реализовывал два интерфейса: и iFigure, и iCircle.-->

<?php

interface IFigure
{
    public function getSquare(): int;

    public function getPerimeter(): int;
}

interface ITetragone
{
    public function getA(): int;

    public function getB(): int;

    public function getC(): int;

    public function getD(): int;
}

interface ICircle
{
    public function getRadius(): int;

    public function getDiameter(): int;
}

class Rectangle implements IFigure, ITetragone
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getA(): int
    {
        return $this->width;
    }

    public function getC(): int
    {
        return $this->width;
    }

    public function getB(): int
    {
        return $this->height;
    }

    public function getD(): int
    {
        return $this->height;
    }

    public function getSquare(): int
    {
        return $this->width * $this->height;
    }

    public function getPerimeter(): int
    {
        return ($this->width + $this->height) * 2;
    }
}

class Disk implements IFigure, ICircle
{
    private $radius;

    public function setRadius($radius): self
    {
        $this->radius = $radius;
        return $this;
    }

    public function getSquare(): int
    {
        return M_PI * $this->radius ** 2;
    }

    public function getPerimeter(): int
    {
        return M_PI * $this->radius * 2;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function getDiameter(): int
    {
        return $this->getRadius() * 2;
    }
}
