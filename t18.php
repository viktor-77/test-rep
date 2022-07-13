<!--Сделайте класс Programmer, который будет наследовать от класса Employee. Пусть новый класс имеет свойство langs,
 в котором будет хранится массив языков, которыми владеет программист. Сделайте также геттер и сеттер для этого свойства.-->

<?php

class Employee
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }
}

class Programmer extends Employee
{
    private $langs = ['php', 'javaScript'];

    public function getlangs()
    {
        return $this->langs;
    }

    public function setlangs($langs)
    {
        return $this->langs = $langs;
    }
}

print_r((new Programmer)->getlangs());
