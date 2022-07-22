<!--методи додавання та відімання класів-->
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

    public function addClass($className)
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

    public function removeClass($className)
    {
        if (isset($this->attributes['class'])) {
            $classNames = explode(' ', $this->attributes['class']);
            if (in_array($className, $classNames)) {
                $pos = array_search($className, $classNames);
                array_splice($classNames, $pos, 1);
                $this->attributes['class'] = implode(' ',$classNames);
            }
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
$tag->addClass('a')->addClass('a')->addClass('b')->addClass('c')->removeClass('b');

echo $tag->openTag();
