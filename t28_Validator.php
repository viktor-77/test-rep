<!--Реализуйте описанный класс Validator. Проверьте его работу.-->

<?php

class Validator
{
    public function isEmail($str)
    {
        return (bool)preg_match('#^[0-9a-z]{10,}@[0-9a-z]{1,10}\.[a-z]{2,4}$#', $str);
    }

    public function isDomain($str)
    {
        // проверяет строку на то, что она корректное имя домена
    }

    public function inRange($num, $from, $to)
    {
        return $from <= $num && $num <= $to;
    }

    public function inLength($str, $from, $to)
    {
        return $from <= mb_strlen($str) && mb_strlen($str) <= $to;
    }
}