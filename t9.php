<!--Сделайте класс Employee, в котором будут следующие публичные свойства - name, age, salary. Сделайте так, чтобы эти свойства заполнялись в конструкторе при создании объекта.-->
<!--Создайте объект класса Employee с именем 'eric', возрастом 25, зарплатой 1000.-->
<!--Создайте объект класса Employee с именем 'kyle', возрастом 30, зарплатой 2000.-->
<!--Выведите на экран сумму зарплат созданных вами юзеров.-->

<?php

class  Employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$empl1 = new Employee('eric', 25, 1000);
$empl2 = new Employee('kyle', 30, 2000);

echo $empl1->salary + $empl2->salary;

