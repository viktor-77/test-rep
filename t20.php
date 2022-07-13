<!--Сделайте класс User, в котором будут следующие свойства только для чтения: name и surname.
Начальные значения этих свойств должны устанавливаться в конструкторе. Сделайте также геттеры этих свойств.-->
<!--Модифицируйте предыдущую задачу так, чтобы третьим параметром в конструктор передавалась
дата рождения работника в формате год-месяц-день. Запишите ее в свойство birthday. Сделайте геттер для этого свойства.-->
<!--Модифицируйте предыдущую задачу так, чтобы был приватный метод calculateAge,
который параметром будет принимать дату рождения, а возвращать возраст с учетом того,
был ли уже день рождения в этом году, или нет.-->
<!--Модифицируйте предыдущую задачу так, чтобы метод calculateAge вызывался в конструкторе объекта,
рассчитывал возраст пользователя и записывал его в приватное свойство age. Сделайте геттер для этого свойства.-->
<!--Сделайте класс Employee, который будет наследовать от класса User.
Пусть новый класс имеет свойство salary, в котором будет хранится зарплата работника.
Зарплата должна передаваться четвертым параметром в конструктор объекта. Сделайте также геттер для этого свойства.-->
<?php

class User
{
    private $name;
    private $surname;
    private $birthday;
    private $age;

    public function __construct(string $name, string $surname, String $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = date('Y-m-d', strtotime($birthday));
        $this->age = $this->calculateAge($birthday);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    private function calculateAge($birthday)
    {
        return floor((time() - strtotime($this->birthday)) / 60 / 60 / 24 / 360);
    }
}

class Employee extends User
{
    private $salary;

    public function __construct(string $name, string $surname, String $birthday, int $salary)
    {
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }
}

echo (new Employee('aa', 'bb', '2001-5-19', 1000))->getSalary() . '<br>';