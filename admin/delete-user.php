<?php
require_once("header.php");
if(isset($_GET['ID'])){
	$ID=$_GET['ID'];
	if($ID!=1){
		$sql="delete from user where `ID`=$ID";
		mysql_query($sql,$conn);
	}
}
header("Location:/admin/user.php");
require_once("footer.php");
?>