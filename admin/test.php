<?php
require_once("admin-header.php");
?>
<h2>考试配置</h2>
<table class="table table-bordered">
<thead>
<tr>
<td>ID</td>
<td>显示名称</td>
<td>mysql表名称</td>
<td>表字段json</td>
<td>可见性</td>
<td>操作</td>
</tr>
</thead>
<tbody>
<?php
$sql="select * from score_table_list order by `ID` asc;";
$result=mysql_query($sql,$conn);
while($row=mysql_fetch_array($result)){
	$ID=$row['ID'];
	$Name=$row['Name'];
	$TN=$row['Table_Name'];
	$Settings=$row['Settings'];
	$Viewable=$row['Viewable']?"True":"False";
	$EDIT="编辑";
	$DELETE="删除";
	$EDITVIEW="更改可见性";
	echo "<tr><td>$ID</td><td>$Name</td><td>$TN</td><td>$Settings</td><td>$Viewable</td><td><a href=\"?action=edit-test&ID=$ID\" class=\"btn btn-primary\">$EDIT</a><a href=\"?action=edit-viewable&ID=$ID\" class=\"btn btn-primary\">$EDITVIEW</a><a href=\"?action=delete-test&ID=$ID\" class=\"btn btn-primary\">$DELETE</a></td></tr>";
}
?>
</tbody>
</table>
<a href="?action=edit-test" class="btn btn-primary">新建考试</a>
<?php
require_once("footer.php");
?>