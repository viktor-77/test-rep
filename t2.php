<!--Не подсматривая в мой код, реализуйте такой же класс Arr.-->
<?php

class Arr
{
    private $numbers = [];

    public function add($number): self
    {
        $this->numbers[] = $number;
        return $this;
    }

    public function getSum():int
    {
        return array_sum($this->numbers);
    }

    public function __toString()
    {
        return (string) $this->getSum();
    }
}

echo (new Arr)->add(10)->add(20);