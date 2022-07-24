<?php
$result = 0;
foreach ($_GET as $num) {
    if (!empty($num)) {
        $result += $num;
    }
}
echo $result;