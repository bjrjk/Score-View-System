<?php
require_once("admin-header.php");
if(isset($_GET['ID'])){
	$ID=$_GET['ID'];
	$sql="select * from score_table_list where `ID`=$ID;";
	$result=mysql_query($sql,$conn);
	if($row=mysql_fetch_array($result)){
		$name=$row['Table_Name'];
		$sql="drop table $name;";
		mysql_query($sql,$conn);
	}
	$sql="delete from score_table_list where `ID`=$ID";
	mysql_query($sql,$conn);
}
header("Location:/admin/test.php");
require_once("footer.php");
?>