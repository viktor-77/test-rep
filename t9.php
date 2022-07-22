<!--Реализуйте геттер getName, возвращающий название нашего тега (то есть значение свойства name).-->
<!--Реализуйте геттер getText, возвращающий текст нашего тега (то есть значение свойства text).-->
<!--Реализуйте геттер getAttrs, возвращающий массив всех атрибутов тега (то есть значение свойства attrs).-->
<!--Реализуйте геттер getAttr, параметром принимающий имя атрибута и возвращающий значение этого атрибута
(а если такого атрибута нет - то null).-->

<?php

class Tag
{
    private $tagName;
    private $attributes;
    private $text;

    public function __construct(string $tagName)
    {
        $this->tagName = $tagName;
    }

    public function getName(): string
    {
        return $this->tagName;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }

    public function getText(): string
    {
        if (!empty($this->text)) {
            return $this->text;
        }
        return '';
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

    public function setAttribute($attributeName, $attributeValue): self
    {
        $this->attributes[$attributeName] = $attributeValue;
        return $this;
    }

    public function setAttributes($attributesArray): self
    {
        foreach ($attributesArray as $attribute => $value) {
            $this->setAttribute($attribute, $value);
        }
        return $this;
    }

    public function getAttributes(): array
    {
        if (!empty($this->attributes)) {
            return $this->attributes;
        }
        return [];
    }

    public function getAttribute(string $attributeName)
    {
        if (isset($this->attributes[$attributeName])) {
            return $this->attributes[$attributeName];
        } else {
            return null;
        }
    }

    public function removeAttribute($attributeName): self
    {
        if (isset($this->attributes[$attributeName])) {
            unset($this->attributes[$attributeName]);
        }
        return $this;
    }

    public function addClass($className): self
    {
        if (isset($this->attributes['class'])) {
            $classNames = explode(' ', $this->attributes['class']);
            if (!in_array($className, $classNames)) {
                $classNames[] = $className;
                $this->attributes['class'] = implode(' ', $classNames);
            }
        } else {
            $this->attributes['class'] = $className;
        }
        return $this;
    }

    public function removeClass($className): self
    {
        if (isset($this->attributes['class'])) {
            $classNames = explode(' ', $this->attributes['class']);
            if (in_array($className, $classNames)) {
                $pos = array_search($className, $classNames);
                array_splice($classNames, $pos, 1);
                $this->attributes['class'] = implode(' ', $classNames);
            }
        }
        return $this;
    }

    private function getAttributeStr(): string
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