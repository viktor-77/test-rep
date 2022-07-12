<!--Сделайте класс Employee, в котором будут следующие приватные свойства: name, age и salary-->
<!--Сделайте геттеры и сеттеры для всех свойств класса Employee.-->
<!--Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).-->
<!--Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара. Говоря другими словами в свойстве salary зарплата будет хранится просто числом, но геттер будет возвращать ее с долларом на конце.-->

<?php

class Employee
{
    private $name;
    private $age;
    private $salary;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if (isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    public function getSalary(): string
    {
        return $this->salary . '$';
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    private function isAgeCorrect($age): bool
    {
        return $age >= 1 and $age <= 100;
    }

}