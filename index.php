<?php
require_once("header.php");
$sql="select * from score_table_list;";
$result=mysql_query($sql,$conn);
$sql2="select * from settings where `Name`='ID_Length';";
$result_2=mysql_query($sql2,$conn);
$row_ID=mysql_fetch_array($result_2);
?>
<h2>成绩查询系统</h2>
<br/>
<div align="center" style="width:30%">
<form method="post" action="score.php" role="form">
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
<p>准考证号：</p>
<input type="text" name="ID" value="" class="form-control" maxlength="<?php echo $row_ID['Value']; ?>"/>
<br/><br/>
<p>姓名：</p>
<input type="text" name="Name" class="form-control" value="" maxlength="64" class="text"/>
<br/><br/>
<input type="submit" value="提交" class="btn btn-default"/>
</form>
<a href="/invite.php" class="btn btn-primary">Invite Area</a>
</div>
<?php
require_once("footer.php");
?>