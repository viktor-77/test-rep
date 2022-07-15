<!--Сделайте интерфейс iUser, который будет описывать юзера.
Предполагается, что у юзера будет имя и возраст и эти поля будут передаваться параметрами конструктора.
Пусть ваш интерфейс также задает то, что у юзера будут геттеры (но не сеттеры) для имени и возраста.-->
<!--Сделайте класс User, реализующий интерфейс iUser.-->

<?php

interface IUser
{
    public function __construct(string $name, int $age);

    public function getName(): string;

    public function getAge(): int;
}

class User
{
    private $name;
    private $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getAge(): int{
        return $this->age;
    }

}