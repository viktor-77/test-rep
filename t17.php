<!--Напишите реализацию методов класса ArrayAvgHelper, заготовки методов которого расположены ниже:-->

<?php

class ArraySumHelper
{
    /*
        Находит сумму первых
        степеней элементов массива:
    */
    public function getAvg1($arr)
    {
        return array_sum($arr);
    }

    /*
        Находит сумму вторых степеней
        элементов массива и извлекает
        из нее квадратный корень:
    */
    public function getAvg2($arr)
    {
        $sum = $this->getSum($arr, 2);
        return $this->calcSqrt($sum, 2);
    }

    /*
        Находит сумму третьих степеней
        элементов массива и извлекает
        из нее кубический корень:
    */
    public function getAvg3($arr)
    {
        $sum = $this->getSum($arr, 3);
        return $this->calcSqrt($sum, 3);
    }

    /*
        Находит сумму четвертых степеней
        элементов массива и извлекает
        из нее корень четвертой степени:
    */
    public function getAvg4($arr)
    {
        $sum = $this->getSum($arr, 4);
        return $this->calcSqrt($sum, 4);
    }

    /*
        Вспомогательный метод, который параметром
        принимает массив и степень и возвращает
        сумму степеней элементов массива:
    */
    private function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $item) {
            $sum += ($item ** $power);
        }
        return $sum;
    }

    /*
        Вспомогательный метод, который параметром
        принимает целое число и степень и возвращает
        корень заданной степени из числа:
    */
    private function calcSqrt($num, $power)
    {
        return $num ** (1 / $power);
    }
}

echo (new ArraySumHelper)->getAvg4([1, 2, 3]);