<?php
require_once("admin-header.php");
if(isset($_POST['News'])){
	$sql="update settings SET Value='". $_POST['News'] . "' where Name='News';";
	mysql_query($sql,$conn);
	$News=$_POST['News'];
}else{
	$sql="select Value from settings where Name='News'";
	$result=mysql_query($sql,$conn);
	if($row=mysql_fetch_array($result)){
		$News=$row['Value'];
	}
}
?>
<center style="width:50%">
<h2>首页新闻</h2>
<p>最多1024个Byte！</p>
<form method="post" role="form">
<textarea name="News" rows=10 class="form-control"/><?php echo $News;?></textarea>
<input type="submit" class="btn btn-default" value="提交" >
</form>
</center>
<?php
require_once("footer.php");
?>