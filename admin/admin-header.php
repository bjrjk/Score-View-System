<?php
require_once("header.php");
if($_SESSION['role']!='administrator'){
	header("Location:/admin/");
	exit();
}
?>