<?php
require_once("header.php");
$sql="select * from score_table_list where `Viewable`=1 order by ID DESC;";
$result=mysql_query($sql,$conn);
$sql2="select * from settings where `Name`='ID_Length';";
$result_2=mysql_query($sql2,$conn);
$row_ID=mysql_fetch_array($result_2);
?>
<h2>成绩查询系统</h2>
<div align="center" style="width:40%">
<h3>最新通知：</h3>
<?php
$sql_news="select Value from settings where Name='News'";
$result_news=mysql_query($sql_news,$conn);
if($row=mysql_fetch_array($result_news)){
		echo $row['Value'];
}
?>
</div>
<br/>
<div align="center" style="width:30%">
<form method="post" action="score.php" role="form">
<p>考试场次：</p>
<select name="Test" class="form-control">
<?php
$flag=false;
while($row=mysql_fetch_array($result)){
	$flag=true;
	$ID=$row['ID'];
	$test=$row['Name'];
	echo "<option value=\"$ID\">$test</option>\n";
}
?>
</select>
<br/>
<p>准考证号：</p>
<input type="text" name="ID" onkeyup="this.value=this.value.replace(/\D/g,'')" value="" class="form-control" <?php echo $flag?"":"disabled=\"\"" ?> maxlength="<?php echo $row_ID['Value']; ?>"/>
<br/>
<p>姓名：（要求精确匹配）</p>
<input type="text" name="Name" class="form-control" <?php echo $flag?"":"disabled=\"\"" ?>  value="" maxlength="64" class="text"/>
<br/>
<p>验证码：</p>
<input type="text" name="captcha" class="form-control" <?php echo $flag?"":"disabled=\"\"" ?> value="" maxlength="4" class="text"/>
<br/>
<img title="点击刷新" src="captcha.php" <?php echo $flag?"":"disabled=\"\"" ?> align="absbottom" onclick="this.src='captcha.php?'+Math.random();"></img>
<br /><br />
<input type="submit" value="提交" <?php echo $flag?"":"disabled=\"\"" ?> class="btn btn-default"/>
</form>
<?php echo $flag?"":"<h2>无考试成绩可供查询，不能提交！</h2>" ?>
<a href="/invite.php" class="btn btn-primary">Invite Area</a>
</div>
<?php
require_once("footer.php");
?>