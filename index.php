<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');

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

        if (isset($attributes['name']) && isset($attributes['value'])) {
            $name = $attributes['name'];
            if (isset($_REQUEST[$name])) {
                $value = $_REQUEST[$name];
                if ($attributes['value'] === $value) {
                    $attributes['checked'] = true;
                }
            }
        }

        return $this->open('input', $attributes);
    }
}

echo (new FormHelper)->openForm();

echo (new FormHelper)->textarea(['name' => 'textarea', 'style' => "height:50px"]) . '<br><br>';
echo (new FormHelper)->input(['name' => 'input']) . '<br><br>';
echo (new FormHelper)->checkbox(['name' => 'checkbox']) . '<br><br>';
echo (new FormHelper)->radio(['name' => 'radio', 'value' => 'val1']);
echo (new FormHelper)->radio(['name' => 'radio', 'value' => 'val2']) . '<br><br>';


echo (new FormHelper)->submit();
echo (new FormHelper)->closeForm();

