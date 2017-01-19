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
<html>
<head>
<title>成绩查询系统——后台管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<div id="content" align="center">
