<?php
require_once("header.php");
$name=$_SESSION['username'];
echo "<h2>欢迎来到成绩查询系统，尊敬的管理员".$name."。请点击右侧导航栏进行相应操作。</h2>";
require_once("footer.php");
?>