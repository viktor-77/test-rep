<?php

include 't16_Submit.php';

class Password extends Input
{
    public function __construct()
    {
        $this->setAttribute('type', 'password');
        parent::__construct();
    }
}

$form = (new Form)->setAttributes([
    'action' => 'test.php',
    'method' => 'GET'
]);

//echo $form->openTag();
//echo (new Input)->setAttribute('name', 'login');
//echo (new Password)->setAttribute('name', 'passw');
//echo new Submit;
//echo $form->closeTag();