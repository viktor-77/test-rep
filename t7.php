<?php

namespace Project;

use \Core\Admin\Model;
use \Core\Users\Storage\Data;

class Test
{
    public function __construct()
    {
        $model = new Model;
        $data = new Data;
    }
}
//Упростите следующий код с использованием use:
//$model = new \Core\Admin\Model;
//$data  = new \Core\Users\Storage\Data;