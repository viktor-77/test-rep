<!--Самостоятельно реализуйте описанный класс Link-->

<!--С помощью этого класса создайте меню из 5 ссылок. Пусть первая ссылка ведет на страницу /1.php, вторая
- на страницу /2.php и так далее.-->

<!--Разместите созданную менюшку в отдельном файле, например, в menu.php.-->

<!--Создайте страницы, на которые ведут ссылки вашей менюшки. Добавьте в ним какой-нибудь текст.-->

<!--Подключите инклудом к тексту каждой страницы вашу менюшку из файла. Убедитесь,
 что ссылки из этой менюшки будут работать корректно.-->

<!--Добавьте в ваш класс Link активацию ссылок.-->

<?php

include 't10_finalClass.php';

class Link extends Tag
{
    const ACTIVE_CLASS = 'active';

    public function __construct()
    {
        $this->setAttribute('href', '');
        parent::__construct('a');
    }

    public function openTag()
    {
        $this->activateSelf();
        return parent::openTag();
    }

    private function activateSelf()
    {
        $arr = explode('/', $_SERVER['REQUEST_URI']);
        $pageURI = end($arr);

        if ($this->getAttribute('href') === $pageURI) {
            $this->addClass(self::ACTIVE_CLASS);
        }
    }
}

echo $a1 = (new Link())->setAttribute('href', '1.php')->setText('1')->show() . ' ';
echo $a2 = (new Link())->setAttribute('href', '2.php')->setText('2')->show() . ' ';
echo $a3 = (new Link())->setAttribute('href', '3.php')->setText('3')->show() . ' ';
echo $a4 = (new Link())->setAttribute('href', '4.php')->setText('4')->show() . ' ';
echo $a5 = (new Link())->setAttribute('href', '5.php')->setText('5')->show() . ' ';
