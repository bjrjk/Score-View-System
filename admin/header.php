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
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="//upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.3.min.js"></script>
<?php
if(isset($_SESSION['role'])&&$_SESSION['role']!='administrator'){
?>
<script type="text/javascript">
        $(document).ready(function() {
    		$("body").on("contextmenu",function(e){
				return false;
    	    }); 
		}); 
        $(document).keydown(function(event){
    		if(event.keyCode==123){
    			return false;
   		}
		else if(event.ctrlKey && event.shiftKey && event.keyCode==73){        
      			return false;  
   		}
		});
</script>
<?php
}
?>
<script language="javascript" type="text/javascript">
function goback(){
	window.location.href="/admin/index.php"; 
}
</script> 
</head>
<div id="content" align="center">
