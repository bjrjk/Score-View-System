<?php
require_once("admin-header.php");
$sql="select * from score_table_list;";
$result=mysql_query($sql,$conn);
?>
<h2>成绩查询系统——自定义查询</h2>
<br/>
<div align="center" style="width:50%">
<form method="post" action="?action=customed-score-process" role="form">
<p>考试场次：</p>
<select name="Test" class="form-control">
<?php
while($row=mysql_fetch_array($result)){
	$ID=$row['ID'];
	$test=$row['Name'];
	echo "<option value=\"$ID\">$ID.$test</option>\n";
}
?>
</select>
<br/>
<p>SQL语句：</p>
<textarea name="sql" class="form-control">select * from </textarea>
<input type="submit" value="提交" class="btn btn-default"/>
</form>
</div>
<?php
require_once("footer.php");
?>