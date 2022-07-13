<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');

class ArraySumHelper
{
    public static function getSum1(array $arr):int
    {
        return self::getSum($arr, 1);
    }

    public static function getSum2(array $arr):int
    {
        return  self::getSum($arr, 2);
    }

    public static function getSum3(array $arr):int
    {
        return  self::getSum($arr, 3);
    }

    public static function getSum4(array $arr):int
    {
        return  self::getSum($arr, 4);
    }

    private static function getSum(array $arr,int $power) {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum;
    }
}
echo ArraySumHelper::getSum3([1,2,3,4,5]);