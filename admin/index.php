<?php
require_once("header.php");
if(isset($_GET['action'])){
	$action=$_GET['action'];
}else{
	$action="main";
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
<div style="height:15%;">
<h2>成绩查询系统——后台管理</h2>
</div>
<div style="height:75%;">
<div style="weight:20%;float:left">
<?php include_once("nav.php"); ?>
</div>
<div style="weight:80%;position:relative;margin-left:20%">
<?php include_once($action . '.php'); ?>
</div>
</div>
<?php
require_once("footer.php");
?>
</div>
</html>