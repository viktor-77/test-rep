<!--Не подсматривая в мой код самостоятельно реализуйте такой же класс Arr, методы которого будут вызываться в виде цепочки.
-->

<?php

class Arr
{
    private $numbers = [];

    public function add(int $number)
    {
        $this->numbers[] = $number;
        return $this;
    }

    public function push(array $newArray)
    {
        $this->numbers = array_merge($this->numbers, $newArray);
        return $this;
    }

    public function getSum(): int
    {
        return array_sum($this->numbers);
    }
}

echo (new Arr)->add(10)->add(20)->getSum();