<?php
require_once("header.php");
$sql="select * from score_table_list;";
$result=mysql_query($sql,$conn);
?>
<h2>Invite Area</h2>
<div align="center" style="width:30%">
<form method="post" action="full-score.php" role="form">
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
<p>Invite Code：</p>
<input type="text" name="code" class="form-control" value="" maxlength="64" class="text"/>
<br/><br/>
<input type="submit" value="提交" class="btn btn-default"/>
</form>
</div>
<?php
require_once("footer.php");
?>