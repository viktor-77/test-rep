<?php // Определите, есть ли в строке 3 цифры подряд.
$str = '4g23grgr';
$res = preg_replace('#\d\d\d#','0',$str);
echo $res;