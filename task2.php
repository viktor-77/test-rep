<!--Выведите на index.php запрошенный URL.-->
<?php
$url = $_SERVER['REQUEST_URI'];
echo $url;