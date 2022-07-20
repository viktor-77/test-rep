<!--Пусть дан вот такой класс User, свойства которого доступны только для чтения с помощью геттеров:-->

<?php
class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }

    public function __get($property)
    {
        return $this->$property;
    }
}

echo (new User('aa',10))->name;