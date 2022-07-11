<!--Создайте объект этого класса User проверьте работу методов setAge и addAge +перевірочний метод checkAge.-->
<!--Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста на переданное количество лет.-->

<?php

class User
{
    public $age;

    public function checkAge($age): bool
    {
        return ($age >= 18 and $age <= 60);
    }

    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function addAge($age)
    {
        $newAge = $this->age + $age;
        if ($this->checkAge($newAge)) {
            $this->age = $age;
        }
    }

    public function subAge($age)
    {
        $newAge = $this->age - $age;
        if ($this->checkAge($newAge)) {
            $this->age = $age;
        }
    }
}
