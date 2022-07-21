<!--Самостоятельно добавьте метод setAttr в созданный вами в предыдущем уроке класс Tag.-->
<!--Реализуйте метод removeAttr, который будет удалять переданный параметром атрибут.
Сделайте так, чтобы этот метод также мог принимать участие в цепочке.-->

<?php

class Tag
{
    private $tagName;
    private $attributes;

    public function __construct(string $tagName)
    {
        $this->tagName = $tagName;
    }

    public function openTag()
    {
        $tagName = $this->tagName;
        $attributes = $this->getAttributeStr();
        return "<$tagName $attributes>";
    }

    public function closeTag()
    {
        $tagName = $this->tagName;
        return "</$tagName>";
    }

    public function setAttributes($attributeName, $attributeValue)
    {
        $this->attributes[$attributeName] = $attributeValue;
        return $this;
    }

    private function getAttributeStr()
    {
        $attributeStr = ' ';
        if (!empty($this->attributes)) {
            foreach ($this->attributes as $attr => $value) {
                $attributeStr .= " $attr=\"$value\" ";
            }
        }
        return $attributeStr;
    }
}

$tag = new Tag('input');
echo $tag->setAttributes('id', 55)->setAttributes('class', 'test')->openTag();
