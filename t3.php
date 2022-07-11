<!--Сделайте класс Employee, в котором будут следующие свойства - name, age, salary.-->
<!--Сделайте в классе Employee метод getName, который будет возвращать имя работника.-->
<!--Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.-->
<!--Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.-->
<!--Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.-->
<!--Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.-->
<?php

class Employee
{
    public $name;
    public $age;
    public $salary;

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function checkAge(): bool
    {
        return $this->age > 18;
    }
}

$employee_1 = new Employee;
$employee_1->salary = 5000;

$employee_2 = new Employee;
$employee_2->salary = 6000;

echo $employee_1->salary + $employee_2->salary;