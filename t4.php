<!--Самостоятельно сделайте такие же трейты, как у меня и подключите их к классу Test.
Сделайте в этом классе метод getSum, возвращающий сумму результатов методов подключенных трейтов.-->

<?php

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
        return $this->fun1() + $this->fun2() + $this->fun3();
    }
}

echo (new Test)->getSum();