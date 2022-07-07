<?php
$slug   = $params[1];
$query  = "SELECT * FROM pages WHERE slug='$slug'";

$result = mysqli_query($link, $query) or die(mysqli_error($link));
$page   = mysqli_fetch_assoc($result);

return $page;