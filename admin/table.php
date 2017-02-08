<?php
require_once("admin-header.php");
?>
<h2>考试数据表配置</h2>
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
	$EDIT="导入CSV";
	echo "<tr><td>$ID</td><td>$Name</td><td>$TN</td><td>$Settings</td><td><a href=\"?action=import-csv&ID=$ID\" class=\"btn btn-primary\">$EDIT</a></td></tr>";
}
?>
</tbody>
</table>
<?php
require_once("footer.php");
?>