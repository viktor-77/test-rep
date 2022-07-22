<!--Добавьте в ваш класс Tag описанный метод setAttrs. Проверьте его работу.-->
<!--Самостоятельно внесите соответствующие правки в ваш класс Tag.(можливість додавання атрибутів без значення)-->
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

    public function setAttributes($attributesArray)
    {
        foreach ($attributesArray as $attribute => $value) {
            $this->setAttribute($attribute, $value);
        }
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
                if ($value === true) {
                    $attributeStr .= " $attr";
                } else {
                    $attributeStr .= " $attr=\"$value\" ";
                }
            }
        }
        return $attributeStr;
    }
}

$tag = new Tag('input');
echo $tag->setAttributes(['id' => 55, 'type' => 'textarea'])->setAttribute('disabled', true)->openTag();
