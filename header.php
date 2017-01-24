<?php
require_once("config.php");
session_start();
?>
<html>
<head>
<title>成绩查询系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="//upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.3.min.js"></script>
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
<script language="javascript" type="text/javascript">
function goback(){
	window.location.href="index.php"; 
}
</script> 
</head>
<body>
<div id="content" align="center">
