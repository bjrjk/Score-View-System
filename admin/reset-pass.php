<?php
require_once("header.php");
$success=false;
$msg="";
if(isset($_POST['old_pass'])&&isset($_POST['new_pass'])&&isset($_POST['repeat_pass'])){
	$username=$_SESSION['username'];
	$sql="select * from user where `Username`='$username' limit 1;";
	$result=mysql_query($sql,$conn);
	if($row=mysql_fetch_array($result)){
		if(md5($_POST['old_pass'])==$row['Password']){
			if($_POST['new_pass']==$_POST['repeat_pass']){
				$pass=md5($_POST['new_pass']);
				$sql="update user set `Password`='$pass' where `Username`='$username';";
				mysql_query($sql,$conn);
				$success=true;
				$msg="密码已经成功修改！";
			}else{
				$msg="新密码输入不一致！";
			}
		}else{
			$msg="旧密码输入错误！";
		}
	}else{
		$msg="未知错误！";
	}
}
?>
<div align="center" style="width:40%">
<h2>修改密码</h2>
<form method="post" role="form">
<div class="alert alert-<?php echo $success?"success":"danger"; ?>" style="<?php echo isset($_POST['old_pass'])?"":"display:none;";?>"><?php echo $msg; ?></div>
<input type="password" class="form-control" name="old_pass" placeholder="旧密码"/>
<input type="password" class="form-control" name="new_pass" placeholder="新密码"/>
<input type="password" class="form-control" name="repeat_pass" placeholder="重复新密码"/>
<input type="submit" class="btn btn-default" value="提交" <?php echo $_SESSION['role']!='administrator'?"disabled=\"\"":""; ?>/>
</form>
</div>
<?php
require_once("footer.php");
?>