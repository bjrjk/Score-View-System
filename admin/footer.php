<?php
if(trim($_SESSION["username"])==""&&$_SERVER['PHP_SELF']!='/admin/login.php'){
	header("Location:/admin/login.php");
	exit();
}
?>
