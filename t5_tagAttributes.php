<!--Самостоятельно, не подсматривая в мой код, добавьте в класс Tag возможность добавления атрибутов тега.-->
<?php


class Tag
{
    private $tagName;
    private $attributes;

    public function __construct(string $tagName, array $attributes)
    {
        $this->tagName = $tagName;
        $this->attributes = $attributes;
    }

    public function openTag()
    {
        $tagName = $this->tagName;
        $attributes = $this->getAttributeStr($this->attributes);
        return "<$tagName $attributes>";
    }

    public function closeTag()
    {
        $tagName = $this->tagName;
        return "</$tagName>";
    }

    private function getAttributeStr($attributes)
    {
        $attributeStr = ' ';
        if (!empty($attributes)) {
            foreach ($attributes as $attr => $value) {
                $attributeStr .= " $attr=\"$value\" ";
            }
        }
        return $attributeStr;
    }
}

$tag = new Tag('input', ['id' => 'test', 'class' => 'test-class']);
echo $tag->openTag();



