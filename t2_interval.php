<!--Реализуйте описанный класс Interval. Проверьте его работу.-->
<?php
include 't1_Date.php';

class Interval
{
    private $date1;
    private $date2;

    public function __construct(Date $date1, Date $date2)
    {
        $this->date1 = date_create($date1);
        $this->date2 = date_create($date2);
    }

    public function toDays()
    {
        return ceil(abs($this->getTimestamp($this->date1) - $this->getTimestamp($this->date2)) / 60 / 60 / 24);

    }

    public function toMonths()
    {
        return ceil(abs($this->getTimestamp($this->date1) - $this->getTimestamp($this->date2)) / 60 / 60 / 24 / 30.5);
    }

    public function toYears()
    {
        return ceil(abs($this->getTimestamp($this->date1) - $this->getTimestamp($this->date2)) / 60 / 60 / 24 / 30.5 / 12);
    }

    private function getTimestamp($date)
    {
        return strtotime(date_format($date, 'j-n-Y'));
    }
}
