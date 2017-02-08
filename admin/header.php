<?php
require_once('../config.php');
session_start();
if(!isset($_SESSION["username"])&&$_SERVER['PHP_SELF']!='/admin/login.php'){
	header("Location:/admin/login.php");
	exit();
}elseif(isset($_SESSION["username"])&&$_SERVER['PHP_SELF']=='/admin/login.php'){
	header("Location:/admin/");
	exit();
}
?>

