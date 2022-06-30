<?php
$str = '123444444491@1f3.fr';
$res = preg_match('#^[0-9a-z]{10,}@[0-9a-z]{1,10}\.[a-z]{2,4}$#',$str);
echo $res;