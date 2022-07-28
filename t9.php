<?php

namespace Project\Data;

use Controller\Page as ControllerPage;
use Model\Page as ModelPage;


class Test
{
    public function __construct()
    {
        $pageController = new ControllerPage;
        $pageModel = new ModelPage;
    }
}
//Упростите следующий код с использованием use:
//$pageController  = new \Project\Data\Controller\Page;
//$pageModel       = new \Project\Data\Model\Page;