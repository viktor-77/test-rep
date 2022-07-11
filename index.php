<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');


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
