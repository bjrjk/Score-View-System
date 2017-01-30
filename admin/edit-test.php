<?php
require_once("admin-header.php");
?>
<h2>考试配置编辑</h2>
<?php
$msg="";
if(isset($_POST['Name'])&&isset($_POST['Table_Name'])&&isset($_POST['Settings'])){
	$sql="";
	if(isset($_POST['ID'])&&trim($_POST['ID'])!=""){//edit test
		$ID=$_POST['ID'];
		$Name=$_POST['Name'];
		$TN=$_POST['Table_Name'];
		$Settings=$_POST['Settings'];
		$sql="update score_table_list SET Name = '".$Name."', Table_Name = '".$TN."', Settings = '".$Settings."' WHERE ID = '".$ID."';";
		$msg="更改考试配置成功！";
		mysql_query($sql,$conn);
	}else{//create test
		$Name=$_POST['Name'];
		$TN=$_POST['Table_Name'];
		$Settings=$_POST['Settings'];
		$sql="INSERT INTO `score_table_list` (`Name`, `Table_Name`, `Settings`) VALUES ('$Name', '$TN', '$Settings');";
		$msg="新建考试配置成功！";
		mysql_query($sql,$conn);
		$sql="create table $TN;";
		mysql_query($sql,$conn);
	}
}elseif(isset($_GET['ID'])){//view test
	$ID=$_GET['ID'];
	$sql="select * from score_table_list where `ID`=$ID;";
	$result=mysql_query($sql,$conn);
	if($row=mysql_fetch_array($result)){
		$ID=$row['ID'];
		$Name=$row['Name'];
		$TN=$row['Table_Name'];
		$Settings=$row['Settings'];
	}
}
?>
<div align="center" style="width:50%">
<form method="post" role="form">
<div class="alert alert-success" style="<?php echo isset($_POST['Name'])?"":"display:none;" ?>"><?php echo $msg; ?></div>
<p>ID:<input type="text" class="form-control" name="ID" value="<?php echo $ID;?>"/></p>
<p>显示名称:<input type="text" name="Name" class="form-control" value="<?php echo $Name;?>"/></p>
<p>mysql表名称:<input type="text" name="Table_Name" class="form-control" value="<?php echo $TN;?>"/></p>
<p>表字段json:<textarea name="Settings" class="form-control"/><?php echo $Settings;?></textarea></p>
<input type="submit" class="btn btn-default" value="提交" >
</form>
</div>
<?php
require_once("footer.php");
?>