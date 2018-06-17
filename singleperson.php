<?php
require_once('header.php');
if(!isset($_GET['ID'])||!is_numeric($_GET['ID'])){
	echo '<h1>Wrongly used!</h1>';
	require_once("footer.php");
	exit();
}
for($i=1;$i<=35;$i++){
	$sql="select * from score_table_list where `ID`='$i';";
	$result = mysql_query($sql,$conn);
	$database="";
	$database_setting="";
	$ID=$_GET['ID'];
	if($row=mysql_fetch_array($result)){
		$database_human=$row['Name'];
		$database=$row['Table_Name'];
		$database_setting=$row['Settings'];
		$setting_array=json_decode($database_setting,true);
		$sql="select * from $database where `ID`='$ID';";
		$result=mysql_query($sql,$conn);
		echo "<h2>$database_human</h2>";
		echo "<table class=\"table table-bordered\">\n<thead><tr>";
		foreach($setting_array as $key => $value){
			echo "<td>$value</td>";
		}
		echo "</tr></thead>\n<tbody>\n";
		$flag=false;
		while($row=mysql_fetch_array($result)){
			$flag=true;
			echo "<tr>";
			foreach($setting_array as $key => $value){
				echo "<td>".$row[$key]."</td>";
			}
			echo "</tr>\n";
		}
		echo "</tbody><table>";
		if($flag==false){
			echo "<tr>没有查询到你搜索的成绩！</tr><br/>";
			//Type:ScoreNotExist
		}else{
			//Type:OK
		}
	}else{
		//Type:ExamIDErr
		echo "您的来路不正确，请重新回到首页查询！<br/>";
	}
}
require_once("footer.php");
?>