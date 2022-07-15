<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');


interface IUser
{
    public function getName(): string;

    public function setName(string $name);

    public function getAge(): int;

    public function setAge(int $age);
}

interface IEmployee extends IUser
{
    public function getSalary(): int;

    public function setSalary(int $salary);
}

class Employee implements IEmployee
{
    private $name;
    private $age;
    private $salary;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }
}