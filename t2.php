<!--Пусть у вас есть папка modules/cart. Сделайте так, чтобы все классы из этой папки относились
к пространству имен Modules\Cart.-->

<!--Пусть у вас есть папка modules/shop/cart/. Сделайте так,
чтобы все классы из этой папки относились к пространству имен Modules\Shop\Cart.-->

<!--Пусть у вас есть папка modules, а в ней файл marketCart.php и файл shopCart.php.
Пусть в обоих файлах размещается класс Cart. Сделайте так, чтобы класс из первого файла
принадлежал пространству имен Market\Cart, а из второго файла - пространству Shop\Cart.-->
<?php

require_once 'modules/cart/Controller.php';
require_once 'modules/shop/cart/Controller.php';
require_once 'modules/marketCart.php';
require_once 'modules/shopCart.php';

$modCartCtrl = new \Modules\Cart\Controller;
$modShopCartCtrl = new \Modules\Shop\Cart\Controller;
$modCartCtrl = new \Market\Cart\Cart;
$modShopCartCtrl = new \Shop\Cart\Cart;

