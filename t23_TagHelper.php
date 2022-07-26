<!--Самостоятельно, не подсматривая в мой код, реализуйте описанный класс Tag.-->
<!--Добавьте в класс Tag метод show, одновременно создающий открывающий и закрывающий теги,
а также текст между ними. Метод должен принимать параметром имя тега и текст.-->
<?php

class TagHelper
{
    public function open(string $tagName, $attributes = []): string
    {
        $attributeStr = $this->getAttributeStr($attributes);
        return "<$tagName $attributeStr>";
    }

    public function close(string $tagName): string
    {
        return "</$tagName>";
    }

    public function show(string $tagName, string $text, $attributes=[]): string
    {
        return $this->open($tagName,$attributes) . $text . $this->close($tagName);
    }

    private function getAttributeStr(array $attributes): string
    {
        $res = '';
        if (!empty($attributes)) {
            foreach ($attributes as $attribute => $value) {
                if ($value === true) {
                    $res .= $attribute;
                } else {
                    $res .= "$attribute=\"$value\"";
                }
            }
        }
        return $res;
    }
}


//$th = new TagHelper();

//echo $th->open('form', ['action' => 'test.php', 'method' =>
//    'GET']);
//echo $th->open('input', ['name' => 'year']);
//echo $th->open('input', ['type' => 'submit']);
//echo $th->close('form');

//echo $th->show('b', 'hello');