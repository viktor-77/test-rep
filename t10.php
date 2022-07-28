<?php
//В файле index.php включите автоматическую загрузку классов.
// Следуя соглашению об именах папок и файлов сделайте класс Core\User,
// класс Core\Admin\Controller и класс Project\User\Data. В файле index.php создайте объекты этих классов.

spl_autoload_register();

new Core\User;
new Core\Admin\Controller;
new Project\User\Data;