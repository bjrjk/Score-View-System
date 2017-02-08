<?php
require_once("header.php");
$sql="select * from score_table_list order by ID DESC;";
$result=mysql_query($sql,$conn);
?>
<h2>成绩查询系统——全部查询</h2>
<br/>
<div align="center" style="width:40%">
<form method="post" action="?action=view-score-process" role="form">
<p>考试场次：</p>
<select name="Test" class="form-control">
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
</div>
<?php
require_once("footer.php");
?>