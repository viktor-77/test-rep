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
}

$list = new HtmlList('ul');
$item = (new ListItem())->setText('item');
echo $list->addItem($item)->addItem($item)->addItem($item)->show();