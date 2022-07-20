<!--Сделайте класс Date с публичными свойствами year, month и day.
С помощью магии сделайте свойство weekDay, которое будет возвращать день недели, соответствующий дате.-->
<?php

class Date
{
    public $year;
    public $month;
    public $day;

    public function __construct($year, $month, $day)
    {
        $this->year = $year;
        $this->day = $day;
        $this->month = $month;
    }

    public function __get($property)
    {
        if ($property === 'weekDay') {
            return date("l", mktime(0, 0, 0, date($this->day), date($this->month), date($this->year)));
        }
    }
}

echo (new Date(2022,9,20))->weekDay;