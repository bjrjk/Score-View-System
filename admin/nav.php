<?php
require_once("header.php");
echo "<strong>你好！";
echo $_SESSION['username'];
echo "\n<br/>";
echo "您的身份：";
echo $_SESSION['role'];
echo "\n</strong><br/>";
?>
<br/><br/>
<strong>
<a href="main.php" target="main">主页</a>
<br/>
<a href="view-score.php" target="main">浏览成绩</a>
<br/>
<?php
if($_SESSION['role']=='administrator'){
?>
<a href="customed-score.php" target="main">自定义查询</a>
<br/>
<a href="test.php" target="main">考试配置</a>
<br/>
<a href="user.php" target="main">用户管理</a>
<br/>
<?php
}
?>
<a href="logout.php" target="_top" >登出</a>
</strong>
<?php
require_once("footer.php");
?>