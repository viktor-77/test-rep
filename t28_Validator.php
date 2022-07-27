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
        return (preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $str)
            && preg_match("/^.{1,253}$/", $str)
            && preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $str));

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