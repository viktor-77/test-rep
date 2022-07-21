<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');


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
