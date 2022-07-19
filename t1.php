<!--Реализуйте класс Country со свойствами name, age, population и геттерами для них.
Пусть наш класс для сокращения своего кода использует уже созданный нами трейт Helper.-->

<?php

trait Helper
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Country
{
    use Helper;

    private $population;

    public function getPopulation()
    {
        return $this->population;
    }
}