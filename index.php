<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');

trait Trait1
{
    public function fun1()
    {
        return 1;
    }

    public function fun2()
    {
        return 2;
    }
}

trait Trait2
{
    use Trait1;

    public function fun3()
    {
        return 3;
    }
}

class Test
{
    use Trait2;

    public function getSum()
    {
        return $this->fun1() + $this->fun2()+ $this->fun3();
    }

}

