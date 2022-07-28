<?php

namespace Project;

use \Resource\Controller\Page as ControllerPage;
use \Resource\Model\Page as ModelPage;

class Test
{
    public function __construct()
    {
        $pageController = new ControllerPage;
        $pageModel = new ModelPage;
    }
}

//Упростите следующий код с использованием use:
//$pageController = new \Resource\Controller\Page;
//$pageModel = new \Resource\Model\Page;