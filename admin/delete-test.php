<?php
require_once("header.php");
if(isset($_GET['ID'])){
	$ID=$_GET['ID'];
	$sql="delete from score_table_list where `ID`=$ID";
	mysql_query($sql,$conn);
}
header("Location:/admin/test.php");
require_once("footer.php");
?>