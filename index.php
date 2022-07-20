<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');


class User
{
    private $name;
    private $age;

//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function setName($name)
//    {
//        if ($name != '') { // проверяем имя на непустоту
//            $this->name = $name;
//        }
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function setAge($age)
//    {
//        if ($age >= 0 and $age <= 70) { // проверяем возраст
//            $this->age = $age;
//        }
//    }

    public function __get($property)
    {
        if ($property === 'name') {
            return $this->name;
        }
        if ($property === 'age') {
            return $this->age;
        }
    }

    public function __set($property, $value)
    {
        if ($property === 'name' and $value !== '') {
            return $this->name = $value;
        }
        if ($property === 'age' and is_int($value) and $value >= 0 and $value <= 70) {
            return $this->age = $value;
        }
    }
}

$user = new User;
$user->age = 10;
echo $user->age;