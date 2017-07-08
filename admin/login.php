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
<?php
require_once("header.php");
$msg="";
$success=false;
$captcha=false;
if(!isset($_POST['captcha'])||strtolower($_POST['captcha'])!=$_SESSION['captcha']||$_SESSION['captcha_used']){
	$msg="验证码输入错误！";
	$captcha=false;
}else{
	$captcha=true;
}
$_SESSION['captcha_used']=true;
if(isset($_POST['username'])&&isset($_POST['password'])&&$captcha){
	$username=mysql_real_escape_string($_POST['username']);
	$password=md5($_POST['password']);
	$sql="select * from user where `username`='$username' and `password`='$password'";
	$result = mysql_query($sql,$conn);
	if($row=mysql_fetch_array($result)){
		$ID=$row['ID'];
		$_SESSION['username']=$username;
		$_SESSION['role']=$row['Role'];
		$success=true;
		$sql_login="UPDATE `user` SET `LastLoginTime` = CURRENT_TIMESTAMP WHERE `user`.`ID` = '$ID'";
		mysql_query($sql_login,$conn);
		header("Location:/admin/index.php");
	}else{
		$msg="用户名或密码错误，请重试！";
	}
}
?>
<h1>成绩查询系统——后台管理</h1>
<form class="" role="form" method="post">
 <div class="form-group" style="width:15%;">
 <div class="alert alert-danger" style="<?php echo !$success&&isset($_POST['username'])&&isset($_POST['password'])?"":"display:none;" ?>"><?php echo $msg; ?></div>
  <div class="form-group">
    <label class="control-label">用户名</label>
    <input type="text" class="form-control" name="username" placeholder="请输入用户名" maxlength="64">
  </div>
  <div class="form-group">
    <label class="control-label">密码</label>
    <input type="password" class="form-control" name="password" placeholder="请输入密码" maxlength="64">
    </div>
	<div class="form-group">
	<label class="control-label">验证码</label>
	<input type="text" name="captcha" class="form-control" value="" placeholder="请输入验证码" maxlength="4"/>
</div>
<img title="点击刷新" src="/captcha.php" align="absbottom" onclick="this.src='/captcha.php?'+Math.random();"></img>
  </div>
  
  <div class="form-group" align="center">
    <button type="submit" class="btn btn-default">登录</button>
  </div>
  <a href="/" class="btn btn-primary">返回至首页</a>
 </div>
</form>
<?php
require_once("footer.php");
?>
</div>
</html>