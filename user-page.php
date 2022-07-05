<?php
session_start();
$user_name = $_SESSION[name];
echo "hi $user_name auth was correct";
