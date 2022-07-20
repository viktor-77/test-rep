<!--Реализуйте описанный класс Date. Проверьте его работу.-->

<?php

class Date
{
    private $date; // crated by date_create

    public function __construct($date = null)
    {
        if (isset($date)) {
            $this->date = date_create('today');
        } else {
            $this->date = date_create(date('j-n-Y'));
        }
    }

    public function getDay()
    {
        return date_format($this->date, 'j');
    }

    public function getMonth($lang = null)
    {
        $uaMonth = [
            'Січень', 'Лютий',
            'Березень', 'Квітень', 'Травень',
            'Червень', 'Липень', 'Серпень',
            'Вересень', 'Жовтень', 'Листопад',
            'Грудень'
        ];
        if (empty($lang) or $lang === 'en') {
            return date_format($this->date, 'F');
        }
        if ($lang === 'ua') {
            return $uaMonth[date_format($this->date, 'm') - 1];
        }
    }

    public function getYear()
    {
        return date_format($this->date, 'Y');
    }

    public function getWeekDay($lang = null)
    {
        $uaWeekDay = [
            'Sunday' => 'Неділя',
            'Monday' => 'Понеділок',
            'Tuesday' => 'Вівторок',
            'Wednesday' => 'Середа',
            'Thursday' => 'Четвер',
            'Friday' => 'П\'ятниця',
            'Saturday' => 'Субота',
        ];
        if (empty($lang) or $lang === 'en') {
            return date_format($this->date, 'l');
        }
        if ($lang === 'ua') {
            return $uaWeekDay[date_format($this->date, 'l')];
        }
    }

    public function addDay(int $value)
    {
        $this->date = date_modify($this->date, "$value day");
    }

    public function subDay(int $value)
    {
        $this->date = date_modify($this->date, "-$value day");

    }

    public function addMonth(int $value)
    {
        $this->date = date_modify($this->date, "$value month");
    }

    public function subMonth(int $value)
    {
        $this->date = date_modify($this->date, "-$value month");

    }

    public function addYear(int $value)
    {
        $this->date = date_modify($this->date, "$value year");

    }

    public function subYear(int $value)
    {
        $this->date = date_modify($this->date, "-$value year");
    }

    public function format($format)
    {
        return date_format($this->date,$format);
    }

    public function __toString()
    {
        return (string)date_format($this->date,'j-n-Y');
    }
}

$date = new t1Date('19-05-2001');
echo $date;

