<?php
require_once("header.php");
$name=$_SESSION['username'];
echo "<h2>欢迎来到成绩查询系统，尊敬的".$name."。请点击左侧导航栏进行相应操作。</h2>";
require_once("footer.php");
?>