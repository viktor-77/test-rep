<!--Самостоятельно реализуйте описанный класс Submit, проверьте его работу.-->

<?php

include 't10_finalClass.php';

class Form extends Tag
{
    public function __construct()
    {
        parent::__construct('form');
    }
}

class Input extends Tag
{
    public function __construct()
    {
        parent::__construct('input');
    }

    public function openTag()
    {
        $inputName = $this->getAttribute('name');
        if (isset($_REQUEST[$inputName]) && $this->getAttribute('name')) {
            $this->setAttribute('value', $_REQUEST[$inputName]);
        }
        return parent::openTag(); // TODO: Change the autogenerated stub
    }

    public function __toString()
    {
        return $this->openTag();
    }
}

class Submit extends Input
{
    public function __construct()
    {
        $this->setAttribute('type', 'submit');
        parent::__construct();
    }
}

$form = (new Form)->setAttributes(['action' => 'test.php', 'method' =>
    'GET']);

echo $form->openTag();
echo (new Input)->setAttribute('name', 'year');
echo new Submit;
echo $form->closeTag();