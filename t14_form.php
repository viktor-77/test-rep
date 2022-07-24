<!--Реализуйте описанный класс Form самостоятельно и проверьте его работу.-->

<?php


include 't10_finalClass.php';


class Form extends Tag
{
    public function __construct()
    {
        parent::__construct('form');
    }
}

//$form = new Form();
//$form->setAttributes([
//    'action' => 'index.php',
//    'method' => 'POST',
//]);
//echo $form->openTag();
//echo $form->closeTag();
