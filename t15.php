<!--Не подсматривая в мой код реализуйте такой же класс Arr и вызовите его метод getSum сразу после создания объекта.-->

<?php

class Arr
{
    public $numbers = [];

    public function __construct($array)
    {
        $this->numbers = $array;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}

echo (new Arr([1, 2, 3, 4, 5]))->getSum();