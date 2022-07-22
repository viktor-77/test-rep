<!--Самостоятельно добавьте метод setAttr в созданный вами в предыдущем уроке класс Tag.-->
<!--Реализуйте метод removeAttr, который будет удалять переданный параметром атрибут.
Сделайте так, чтобы этот метод также мог принимать участие в цепочке.-->

<?php

class Tag
{
    private $tagName;
    public $attributes;

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

    public function setAttribute($attributeName, $attributeValue)
    {
        $this->attributes[$attributeName] = $attributeValue;
        return $this;
    }

    public function removeAttribute($attributeName)
    {
        if (isset($this->attributes[$attributeName])) {
            unset($this->attributes[$attributeName]);
        }
        return $this;
    }

    private function getAttributeStr()
    {
        $attributeStr = '';
        if (!empty($this->attributes)) {
            foreach ($this->attributes as $attr => $value) {
                $attributeStr .= " $attr=\"$value\" ";
            }
        }
        return $attributeStr;
    }
}

$tag = new Tag('input');
echo $tag->setAttribute('id', 55)->setAttribute('class', 'test')->openTag();