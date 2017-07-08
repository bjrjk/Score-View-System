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
<a href="?action=main">主页</a>
<br/>
<a href="?action=view-score">浏览成绩</a>
<br/>
<?php
if($_SESSION['role']=='administrator'){
?>
<a href="?action=news">新闻管理</a>
<br/>
<a href="?action=customed-score">自定义查询</a>
<br/>
<a href="?action=generate-code">邀请码生成</a>
<br/>
<a href="?action=test">考试配置</a>
<br/>
<a href="?action=table">考试数据表管理</a>
<br/>
<a href="?action=user">用户管理</a>
<br/>
<a href="?action=checkquery">查看前台查询记录</a>
<br/>
<?php
}
?>
<a href="?action=reset-pass">修改密码</a>
<br/>
<a href="?action=logout">登出</a>
</strong>
<?php
require_once("footer.php");
?>