<?php

include 't16_Submit.php';

class Hidden extends Tag
{
    public function __construct()
    {
        $this->setAttribute('type', 'hidden');
        parent::__construct('input');
    }
}

//$form = (new Form)->setAttributes([
//    'action' => 'test.php',
//    'method' => 'GET'
//]);
//
//echo $form->openTag();
//echo (new Hidden)->setAttribute('name', 'id')->setAttribute('value', '123');
//echo (new Input)->setAttribute('name', 'year');
//echo new Submit;
//echo $form->closeTag();