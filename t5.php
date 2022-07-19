<!--Сделайте интерфейс iUser с методами getName, setName, getAge, setAge.-->
<!--Сделайте интерфейс iEmployee, наследующий от интерфейса iUser и добавляющий в него методы getSalary и setSalary.-->
<!--Сделайте класс Employee, реализующий интерфейс iEmployee.-->

<?php

interface IUser
{
    public function getName(): string;

    public function setName(string $name): self;

    public function getAge(): int;

    public function setAge(int $age): self;
}

interface IEmployee extends IUser
{
    public function getSalary(): int;

    public function setSalary(int $salary): self;
}

class Employee implements IEmployee
{
    private $name;
    private $age;
    private $salary;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;

    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setSalary(int $salary): self
    {
        $this->salary = $salary;
        return $this;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }
}