<!--Изучите и разберите мой код описанного класса. Создайте с его помощью какую-нибудь HTML форму,
 применив как можно больше методов этого класса.-->
<!--Самостоятельно, не подсматривая в мой код, реализуйте описанный класс.-->
<!--Добавьте в вашу реализацию метод для создания тега textarea.-->
<!--Пусть этот тег сохраняет свое значение после отправки формы.-->
<!--Добавьте в вашу реализацию метод для создания выпадающего списка.
Пусть метод первым параметром принимает массив атрибутов тега select, а вторым - массив для создания тегов option.
Пусть этот массив содержит ключ 'text' для текста пункта списка и ключ 'attrs' для массива атрибутов пункта списка. -->
<?php

include 't23_TagHelper.php';

class FormHelper extends TagHelper
{
    public function openForm($attributes = []): string
    {
        return $this->open('form', $attributes);
    }

    public function closeForm(): string
    {
        return $this->open('form');
    }

    public function input($attributes = []): string
    {
        if (isset($attributes['name'])) {
            $name = $attributes['name'];

            if (isset($_REQUEST[$name])) {
                $attributes['value'] = $_REQUEST[$name];
            }
        }
        return $this->open('input', $attributes);
    }

    public function hidden($attributes = []): string
    {
        $attributes['type'] = 'hidden';
        return $this->open('input', $attributes);
    }

    public function password($attributes = []): string
    {
        $attributes['type'] = 'password';
        return $this->input($attributes);
    }

    public function submit($attributes = []): string
    {
        $attributes['type'] = 'submit';
        return $this->open('input', $attributes);
    }

    public function textarea($attributes = []): string
    {
        $attributes['type'] = 'textarea';
        return $this->input($attributes);
    }

    public function checkbox($attributes = []): string
    {
        $attributes['type'] = 'checkbox';
        $attributes['value'] = '1';

        if (isset($attributes['name'])) {
            $name = $attributes['name'];
            if (isset($_REQUEST[$name]) && $_REQUEST[$name] === '1') {
                $attributes['checked'] = true;
            }
        }
        $hidden = $this->hidden(['name' => $name, 'value' => '0']);

        return $hidden . $this->open('input', $attributes);
    }

    public function radio($attributes = []): string
    {
        $attributes['type'] = 'radio';

//        if (isset($attributes['name'], $attributes['value'])) {
//            $name = $attributes['name'];
//            if (isset($_REQUEST[$name])) {
//                $value = $_REQUEST[$name];
//                if ($attributes['value'] === $value) {
//                    $attributes['checked'] = true;
//                }
//            }
//        }

        if (isset($attributes['name'], $_REQUEST[$attributes['name']])) {
            if ($attributes['value'] === $_REQUEST[$attributes['name']]) {
                $attributes['checked'] = true;
            }
        }
        return $this->open('input', $attributes);
    }

    public function select($selectAttributes, $optionAttributes)
    {
        $options = '';
        if (isset($_REQUEST[$selectAttributes['name']])) {
            $value = $_REQUEST[$selectAttributes['name']];
            $selectAttributes['value'] = $value;
        }

        foreach ($optionAttributes as $optionAttribute) {
            if ($optionAttribute['attrs']['value'] === $selectAttributes['value']) {
                $optionAttribute['attrs']['selected'] = true;
            } else {
                unset($optionAttribute['attrs']['selected']);
            }
            $options .= $this->show('option', $optionAttribute['text'], $optionAttribute['attrs']);
        }

        return $this->open('select', $selectAttributes) . $options . $this->close('select');
    }
}

$formHelper = new FormHelper();
echo $formHelper->openForm();

echo $formHelper->textarea(['name' => 'textarea', 'style' => "height:50px"]) . '<br><br>';
echo $formHelper->input(['name' => 'input']) . '<br><br>';
echo $formHelper->checkbox(['name' => 'checkbox']) . '<br><br>';
echo $formHelper->radio(['name' => 'radio', 'value' => 'val1']);
echo $formHelper->radio(['name' => 'radio', 'value' => 'val2']) . '<br><br>';

echo $formHelper->select(
    ['name' => 'list', 'class' => 'eee'],
    [
        ['text' => 'item1', 'attrs' => ['value' => '1']],
        ['text' => 'item2', 'attrs' => ['value' => '2', 'selected'
        => true]],
        ['text' => 'item3', 'attrs' => ['value' => '3', 'class'
        => 'last']],
    ],

);

echo $formHelper->submit();
echo $formHelper->closeForm();