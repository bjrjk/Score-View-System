<?php
require_once("header.php");
$sql="select * from score_table_list;";
$result=mysql_query($sql,$conn);
?>
<h2>成绩查询系统——全部查询</h2>
<br/>
<form method="post" action="view-score-process.php">
<p>考试场次：</p>
<select name="Test">
<?php
while($row=mysql_fetch_array($result)){
	$ID=$row['ID'];
	$test=$row['Name'];
	echo "<option value=\"$ID\">$test</option>\n";
}
?>
</select>
<br/><br/>
<input type="submit" value="提交" class="btn btn-default"/>
</form>
<?php
require_once("footer.php");
?>