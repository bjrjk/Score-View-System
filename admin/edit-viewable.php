<?php
require_once("admin-header.php");
if(isset($_GET['ID'])){
	$Viewable=0;
	$ID=$_GET['ID'];
	$sql="select * from score_table_list where `ID`=$ID;";
	$result=mysql_query($sql,$conn);
	if($row=mysql_fetch_array($result)){
		$Viewable=$row['Viewable']?0:1;
	}
	$sql = "UPDATE score_table_list SET `Viewable` = $Viewable WHERE `score_table_list`.`ID` = $ID;";
	mysql_query($sql,$conn);
	echo "<script>alert(\"修改成功！\");window.history.go(-1);</script>";
}
require_once("footer.php");
?>