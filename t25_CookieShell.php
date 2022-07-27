<!--Реализуйте описанный класс CookieShell. Проверьте его работу.-->
<!--С помощью созданного вами класса реализуйте счетчик обновления страницы, работающий на куках.-->
<?php

class CookieShell
{
    public function set(string $name, $value, $time)
    {
        setcookie($name, $value, time() + $time);
        $_COOKIE[$name] = $value;
    }

    public function get(string $name)
    {
        if (isset($_COOKIE[$name])) {
            return $_COOKIE[$name];
        }
    }

    public function del(string $name)
    {
        if (isset($_COOKIE[$name])) {
            setcookie($name, '', time());
            unset($_COOKIE[$name]);
        }
    }

    public function exists(string $name): bool
    {
        return isset($_COOKIE[$name]);
    }
}

$csh = new CookieShell;
if ($csh->exists('counter')) {
    $counter = $csh->get('counter');
    $csh->set('counter', ++$counter, 3600 * 24);
} else {
    $csh->set('counter', 1, 3600 * 24);
}
echo $csh->get('counter');

