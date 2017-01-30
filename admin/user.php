<?php
require_once("admin-header.php");
?>
<h2>用户管理</h2>
<table class="table table-bordered">
<thead>
<tr>
<td>ID</td>
<td>用户名</td>
<td>权限</td>
<td>操作</td>
</tr>
</thead>
<tbody>
<?php
$sql="select * from user;";
$result=mysql_query($sql,$conn);
while($row=mysql_fetch_array($result)){
	$ID=$row['ID'];
	$Username=$row['Username'];
	$Role=$row['Role'];
	$DELETE="删除";
	echo "<tr><td>$ID</td><td>$Username</td><td>$Role</td><td><a href=\"delete-user.php?ID=$ID\" class=\"btn btn-primary\">$DELETE</a></td></tr>";
}
?>
</tbody>
</table>
<a href="register.php" class="btn btn-primary">新建用户</a>
<?php
require_once("footer.php");
?>