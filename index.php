<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$url = $_SERVER['REQUEST_URI'];
echo $url;