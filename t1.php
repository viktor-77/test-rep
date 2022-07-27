<!--Пусть у вас есть папка core и папка project. В каждой из папок есть свой класс Controller.
 Сделайте так, чтобы эти классы принадлежали разным пространствам имен.
 В файле index.php создайте объекты одного и второго классов.-->

<?php
include 'core/Controller.php';
include 'project/Controller.php';

$coreController = new \Core\Controller;
$projectController = new \Project\Controller;