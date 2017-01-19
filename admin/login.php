<?php
require_once("header.php");
$msg="";
$success=false;
if(isset($_POST['username'])&&isset($_POST['password'])){
	$username=mysql_real_escape_string($_POST['username']);
	$password=md5($_POST['password']);
	$sql="select * from user where `username`='$username' and `password`='$password'";
	$result = mysql_query($sql,$conn);
	if(mysql_fetch_array($result)){
		$_SESSION['username']=$username;
		$success=true;
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
  </div>
  <div class="form-group" align="center">
    <button type="submit" class="btn btn-default">登录</button>
  </div>
 </div>
</form>
<?php
require_once("footer.php");
?>
