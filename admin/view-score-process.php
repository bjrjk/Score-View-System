<?php
require_once("header.php");
?>
<h2>成绩查询系统</h2>
<?php
if(isset($_POST['Test'])){
		$Test=mysql_real_escape_string($_POST['Test']);
		$sql="select * from score_table_list where `ID`='$Test';";
		$result = mysql_query($sql,$conn);
		$database="";
		$database_setting="";
		if($row=mysql_fetch_array($result)){
			$database=$row['Table_Name'];
			$database_setting=$row['Settings'];
			$setting_array=json_decode($database_setting,true);
			$sql="select * from $database;";
			$result=mysql_query($sql,$conn);
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
			}
		}else{
			echo "您的来路不正确，请重新回到首页查询！<br/>";
		}
}else{
	echo "您的来路不正确，请重新回到首页查询！<br/>";
}
require_once("footer.php");
?>