<?php
require_once("header.php");
?>
<h2>新建用户</h2>
<?php
$msg="";
if(isset($_POST['user'])&&isset($_POST['pass'])){
	$Username=$_POST['user'];
	$Password=md5($_POST['pass']);
	$sql="INSERT INTO `user` (`Username`, `Password`, `Role`) VALUES ('$Username', '$Password', 'guest');";
	$msg="用户添加成功！";
	mysql_query($sql,$conn);
}
?>
<div align="center" style="width:50%">
<form method="post" role="form">
<div class="alert alert-success" style="<?php echo isset($_POST['user'])?"":"display:none;" ?>"><?php echo $msg; ?></div>
<p>用户名:<input type="text" name="user" class="form-control" value="<?php echo $Username;?>"/></p>
<p>密码:<input type="password" name="pass" class="form-control" value=""/></p>
<input type="submit" class="btn btn-default" value="提交" >
</form>
</div>
<?php
require_once("footer.php");
?>