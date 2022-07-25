<!--Реализуйте класс Radio для создания радио переключателя. Проверьте работу этого класса.-->

<?php

include 't16_Submit.php';

class Hidden extends Input
{
    public function __construct()
    {
        $this->setAttribute('type', 'hidden');
        parent::__construct();
    }
}

class Radio extends Input
{
    public function __construct()
    {
        $this->setAttribute('type', 'radio');
        parent::__construct();
    }

    public function openTag()
    {
        $name = $this->getAttribute('name');
        $value = $this->getAttribute('value');
        if (isset($_REQUEST[$name]) && $_REQUEST[$name] === $value) {
            $this->setAttribute('checked');
        } else {
            $this->removeAttribute('checked');
        }
        return parent::openTag();
    }
}

//$form = (new Form)->setAttributes([
//    'action' => '',
//    'method' => 'GET'
//]);
//echo $form->openTag();
//echo (new Radio())->setAttribute('name', 'radio')->setAttribute('value', '1');
//echo (new Radio())->setAttribute('name', 'radio')->setAttribute('value', '2');
//echo new Submit;
//echo $form->closeTag();
