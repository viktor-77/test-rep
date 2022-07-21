<!--Самостоятельно, не подсматривая в мой код, сделайте такой же класс Tag.-->
<!--Создайте с помощью класса Tag тег <img> и выведите его на экран.-->
<!--Создайте с помощью класса Tag тег <header> и выведите его на экран с текстом 'header сайта'.-->
<?php

class Tag
{
    private $tagName;

    public function __construct($tagName)
    {
        $this->tagName = $tagName;
    }

    public function openTag()
    {
        $tagName = $this->tagName;
        return "<$tagName>";
    }

    public function closeTag()
    {
        $tagName = $this->tagName;
        return "</$tagName>";
    }
}

//$img = new Tag('img');
//$header = new Tag('header');
//echo $img->openTag() . '<br>';
//echo $header->openTag() . 'header сайта' . $header->closeTag();