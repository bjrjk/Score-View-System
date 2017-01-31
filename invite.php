<?php
require_once("header.php");
?>
<h2>Invite Area</h2>
<div align="center" style="width:30%">
<form method="post" action="full-score.php" role="form">
<p>Invite Code：</p>
<input type="text" name="code" class="form-control" value="" class="text"/>
<br/><br/>
<p>验证码：</p>
<input type="text" name="captcha" class="form-control" value="" maxlength="4" class="text"/>
<br/>
<img title="点击刷新" src="captcha.php" align="absbottom" onclick="this.src='captcha.php?'+Math.random();"></img>
<br /><br />
<input type="submit" value="提交" class="btn btn-default"/>
</form>
</div>
<?php
require_once("footer.php");
?>