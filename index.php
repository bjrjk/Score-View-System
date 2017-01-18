<?php
require_once("header.php");
?>
<h2>成绩展示系统</h2>
<br/>
<form method="post" action="score.php">
<p>准考证号：</p>
<input type="text" name="ID" value="" maxlength="<?php echo ID_Length; ?>"/>
<br/><br/>
<p>姓名：</p>
<input type="text" name="Name" value="" maxlength="64" class="text"/>
<br/><br/>
<input type="submit" value="提交" class="btn"/>
</form>
<?php
require_once("footer.php");
?>