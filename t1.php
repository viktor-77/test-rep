<!--Сделайте класс User, в котором будут следующие свойства - name, surname, patronymic.
 Сделайте так, чтобы при выводе объекта через echo на экран выводилось ФИО пользователя.-->

<?php

class User
{
    private $name;
    private $surname;
    private $patronymic;

    public function __construct($name, $surname, $patronymic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }

    public function __toString()
    {
        return $this->name . ' ' . $this->surname . ' ' . $this->patronymic;
    }
}

echo new User('aa','bb','cc');