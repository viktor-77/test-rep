<!--Реализуйте описанный класс Textarea-->

<?php

include 't16_Submit.php';

class TextArea extends Input
{
    public function __construct()
    {
        $this->setAttribute('type', 'textarea');
        parent::__construct();
    }

    public function __toString()
    {
        return $this->show();
    }
}

//$form = (new Form)->setAttributes(['action' => 'test.php', 'method' =>
//    'GET']);
//
//echo $form->openTag();
//echo (new Input)->setAttribute('name', 'user');
//echo (new Textarea)->setAttribute('name', 'message');
//echo new Submit;
//echo $form->closeTag();