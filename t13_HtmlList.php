<!--Реализуйте самостоятельно описанные мною классы. Проверьте их работу.-->

<!--Сделайте так, чтобы при преобразовании наших классов к строке, метод show не нужно было вызывать.
Модифицируйте весь код в соответствии с этим. Не забудьте про вот это место метода show класса HtmlList:-->

<!--Сделайте классы Ul и Ol, которые будут наследовать от класса HtmlList. Эти классы должны будут создавать соответствующий тип списков-->

<?php

include 't10_finalClass.php';

class ListItem extends Tag
{
    public function __construct()
    {
        parent::__construct('li');
    }
}

class HtmlList extends Tag
{
    private $items;

    public function addItem(ListItem $item): self
    {
        $this->items[] = $item;
        return $this;
    }

    public function show(): string
    {
        $result = $this->openTag();
        foreach ($this->items as $item) {
            $result .= $item->show();
        }
        $result .= $this->closeTag();
        return $result;
    }

    public function __toString()
    {
        return $this->show();
    }
}

class Ol extends HtmlList {
    public function __construct()
    {
        parent::__construct('ol');
    }
}

class Ul extends HtmlList {
    public function __construct()
    {
        parent::__construct('ul');
    }
}

$list = new Ol;
$item = (new ListItem())->setText('item');
echo $list->addItem($item)->addItem($item)->addItem($item);