<!--Реализуйте класс Radio для создания радио переключателя. Проверьте работу этого класса.-->

<?php

include 't16_Submit.php';

class Radio extends Tag
{
    public function __construct()
    {
        $this->setAttribute('type', 'radio');
        parent::__construct('input');
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

    public function __toString()
    {
        return $this->openTag();
    }
}

$form = (new Form)->setAttributes([
    'action' => '',
    'method' => 'GET'
]);
echo $form->openTag();
echo (new Radio())->setAttribute('name', 'radio')->setAttribute('value', '1');
echo (new Radio())->setAttribute('name', 'radio')->setAttribute('value', '2');
echo new Submit;
echo $form->closeTag();
