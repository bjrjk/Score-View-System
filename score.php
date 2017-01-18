<?php
require_once("header.php");
?>
<?php
if(isset($_POST['ID'])&&isset($_POST['Name'])){
	if($conn=mysql_connect(SQL_ADDRESS,SQL_USERNAME,SQL_PASSWORD)){
		mysql_query("set names 'utf8'");
		mysql_select_db(SQL_DATABASE);
		$sql="select * from ". SQL_TABLE ." where `ID`='". mysql_real_escape_string($_POST['ID']) ."' and `Name`='". mysql_real_escape_string($_POST['Name']) ."' ;";
		if($_POST['ID']=='all'&&$_POST['Name']=='all'){
			$sql="select * from ". SQL_TABLE;
		}
		if(is_numeric($_POST['ID'])&&is_numeric($_POST['Name'])&&$_POST['Name']==$_POST['ID']){
			$sql="select * from ". SQL_TABLE . " where `Class`='" . $_POST['ID'] . "'";
			
		}
		$result = mysql_query($sql,$conn);
$table_head=<<<html
		<table class="table table-bordered">
		<thead>
		<tr>
		<td>班级</td><td>学号</td><td>姓名</td><td>语文</td><td>数学</td><td>英语</td><td>物理</td><td>化学</td><td>生物</td><td>总分</td><td>年排</td>
		</tr>
		</thead>
		<tbody>
html;
		echo $table_head;
		while($row = mysql_fetch_array($result)){
			$content="<tr><td>".$row['Class']."</td><td>".$row['ID']."</td><td>".$row['Name']."</td><td>".$row['Chinese']."</td><td>".$row['Math']."</td><td>".$row['English']."</td><td>".$row['Physics']."</td><td>".$row['Chemistry']."</td><td>".$row['Biology']."</td><td>".$row['Total']."</td><td>".$row['Rank']."</td>"."</tr>";
			echo $content;
		}
$table_bottom=<<<html
		</tbody></table>
html;
		echo $table_bottom;
	}else{
		echo "数据库连接失败，请稍后再查询！";
	}
}else{
	echo "您的来路不正确，请重新回到首页查询！";
}
?>
<button onclick="goback()">返回</button>
<?php
require_once("footer.php");
?>