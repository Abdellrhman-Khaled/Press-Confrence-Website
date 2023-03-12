<?php
session_start();
$_SESSION=array();
setcookie('user_id', '', time() - 3600, '/');
session_destroy();
header("location: login.php");
?>