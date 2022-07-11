<!--Не подсматривая в мой код реализуйте такой же класс User с методом show().-->
<?php
class Employee {
    public $name;
    public $age;
    public $salary;

    public function show($str){
        echo $str;
    }
}

$person_john = new Employee;
$person_john->show('hello!');
