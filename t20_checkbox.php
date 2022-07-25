<!--Изучите и разберите приведенный мною код. Затем не подсматривая в учебник сделайте такой же класс для создания чекбокса.-->

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

class Checkbox extends Tag
{
    public function __construct()
    {
        $this->setAttribute('type', 'checkbox');
        $this->setAttribute('value', '1');
        parent::__construct('input');
    }

    public function openTag()
    {
        $name = $this->getAttribute('name');
        if ($name) {
            $hidden = (new Hidden())->setAttribute('name', $name)->setAttribute('value', '0');

            if (!empty($_REQUEST[$name])) {
                $this->setAttribute('checked');
            } else {
                $this->removeAttribute('checked');
            }
            return $hidden->openTag() . parent::openTag();
        } else {
            return parent::openTag();
        }
    }

    public function __toString()
    {
        return $this->openTag();
    }

}

//$form = (new Form)->setAttributes([
//    'action' => '',
//    'method' => 'GET'
//]);
//echo $form->openTag();
//echo (new Checkbox)->setAttribute('name', 'checkbox');
//echo (new Input)->setAttribute('name', 'user');
//echo new Submit;
//echo $form->closeTag();