<!--Пусть массив $methods будет ассоциативным с ключами method1 и method2.
 Выведите имя и возраст пользователя с помощью этого массива.-->
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

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$methods = ['method1' => 'getName', 'method2' => 'getAge'];

$user = new User('Ivan', 25);

echo $user->{$methods['method1']}() . '<br>';
echo $user->{$methods['method2']}();



