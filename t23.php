<?php

abstract class Figure
{
    abstract public function getSquare();

    abstract public function getPerimeter();

    public function getSquarePerimeterSum()
    {
        return $this->getSquare() + $this->getPerimeter();
    }
}

class Rectangle extends Figure
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getSquare(): int
    {
        return $this->height * $this->width;
    }

    public function getPerimeter(): int
    {
        return ($this->height + $this->width) * 2;
    }
}

echo (new Rectangle(4, 8))->getSquarePerimeterSum();
