<!--Реализуйте описанные классы Select и Option.-->
<!--Сделайте так, чтобы после отправки формы список сохранял свое выбранное значение.-->
<?php
include 't16_Submit.php';

class Select extends Tag
{
    private $options = [];

    public function __construct()
    {
        parent::__construct('select');
    }

    public function addOption(Option $option): self
    {
        $name = $this->getAttribute('name');
        $name = explode('[]', $name)[0];
        if (isset($_REQUEST[$name])) {
            $value = $_REQUEST[$name];
            if (is_array($value)) {
                if (in_array($option->getText(), $value)) {
                    $option->setAttribute('selected');
                } else {
                    $option->removeAttribute('selected');
                }
            } else {
                if ($option->getText() === $value) {
                    $option->setAttribute('selected');
                } else {
                    $option->removeAttribute('selected');
                }
            }
        }

        $this->options[] = $option->openTag() . $option->getText() . $option->closeTag();
        return $this;
    }

    public function setMultiple(): self
    {
        $this->setAttribute('multiple');
        return $this;
    }

    public function show(): string
    {
        $result = $this->openTag();
        foreach ($this->options as $option) {
            $result .= $option;
        }
        $result .= $this->closeTag();
        return $result;
    }
}

class Option extends Tag
{
    public function __construct()
    {
        parent::__construct('option');
    }

    public function setSelected(): self
    {
        $this->setAttribute('selected');
        return $this;
    }
}

$form = (new Form)->setAttributes([
    'action' => '',
    'method' => 'GET'
]);
echo $form->openTag();
echo (new Select)->setAttribute('name', 'sel[]')
    ->addOption((new Option())->setText('item1'))
    ->addOption((new Option())->setText('item2')->setSelected())
    ->addOption((new Option())->setText('item3'))
    ->show();
echo new Submit;
echo $form->closeTag();
