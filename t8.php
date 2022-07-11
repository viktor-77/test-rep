<!--Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).-->
<!--В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.-->
<!--Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.-->
<!--Вынесите проверку курса в отдельный private метод isCourseCorrect.-->

<?php

class  Student
{

    public $name;
    public $course = 1;

    public function transferToNextCourse()
    {
        if ($this->isCourseCorrect()) {
            $this->course++;
        }
    }


    private function isCourseCorrect(): bool
    {
        return ($this->course + 1) <= 5;
    }

}