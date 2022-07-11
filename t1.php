<!--Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).-->
<!--Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'john', возраст 25, зарплата 1000.-->
<!--Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'eric', возраст 26, зарплата 2000.-->
<!--Выведите на экран сумму зарплат созданных юзеров.-->
<?php
class Employee {
    public $name;
    public $age;
    public $salary;
}

$person_john = new Employee;
$person_john->name = 'john';
$person_john->age = 25;
$person_john->salary = 1000;

$person_eric = new Employee;
$person_eric->name = 'eric';
$person_eric->age = 26;
$person_eric->salary = 2000;

echo $person_john->salary + $person_eric->salary +'<br>';
echo $person_john->age + $person_eric->age +'<br>';