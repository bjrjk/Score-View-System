<?php
require_once("header.php");
?>
<h2>考试配置</h2>
<table class="table table-bordered">
<thead>
<tr>
<td>ID</td>
<td>显示名称</td>
<td>mysql表名称</td>
<td>表字段json</td>
<td>操作</td>
</tr>
</thead>
<tbody>
<?php
$sql="select * from score_table_list;";
$result=mysql_query($sql,$conn);
while($row=mysql_fetch_array($result)){
	$ID=$row['ID'];
	$Name=$row['Name'];
	$TN=$row['Table_Name'];
	$Settings=$row['Settings'];
	$EDIT="编辑";
	$DELETE="删除";
	echo "<tr><td>$ID</td><td>$Name</td><td>$TN</td><td>$Settings</td><td><a href=\"edit-test.php?ID=$ID\" class=\"btn btn-primary\">$EDIT</a><a href=\"delete-test.php?ID=$ID\" class=\"btn btn-primary\">$DELETE</a></td></tr>";
}
?>
</tbody>
</table>
<a href="edit-test.php" class="btn btn-primary">新建考试</a>
<?php
require_once("footer.php");
?>