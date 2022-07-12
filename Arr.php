<?php

class Arr
{
    private $numbers = [];

    public function add(array $array)
    {
        $this->numbers = array_merge($this->numbers, $array);
    }

    public function getSum(): int
    {
        if ($this->isArrayEmpty()){
            return -0;
        }
        else {
            return array_sum($this->numbers);
        }
    }

    public function getAvg(): int
    {
        if ($this->isArrayEmpty()){
            return -0;
        }
        else {
            return $this->getSum() / count($this->numbers);
        }

    }

    private function isArrayEmpty(): bool
    {
        return empty($this->numbers);
    }
}

