<!--Сделайте класс Employee, в котором будут следующие свойства работника - name, salary. Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.-->
<?php

class Employee
{
    public $name;
    public $salary;

    public function doubleSalary()
    {
        $this->salary *= 2;
    }
}
