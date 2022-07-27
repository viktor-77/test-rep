<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');


class SessionShell
{
    // Удобно стартуем сессию в конструкторе класса:
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function set($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public function get($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }
    }

    public function del($name)
    {
        if (isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
        }
    }

    public function exists($name): bool
    {
        return isset($_SESSION[$name]);
    }

    public function destroy()
    {
        if (isset($_SESSION)){
            session_destroy();
        }
    }
}