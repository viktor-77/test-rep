<!--Изучите и разберите приведенный мною код. Затем не подсматривая в учебник сделайте такой же класс для создания чекбокса.-->

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
            if (!empty($_REQUEST[$name])) {
                $this->setAttribute('checked');
            } else {
                $this->removeAttribute('checked');
            }
            $hidden = (new Hidden())->setAttribute('name', $name)->setAttribute('value', '0');
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

$form = (new Form)->setAttributes([
    'action' => 'index.php',
    'method' => 'GET'
]);
echo $form->openTag();
echo (new Checkbox)->setAttribute('name', 'checkbox');
echo new Submit;
echo $form->closeTag();