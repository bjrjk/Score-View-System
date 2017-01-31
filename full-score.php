<?php
require_once("header.php");
require_once("check.php");
?>
<h2>成绩查询系统</h2>
<?php
function quit(){
	echo "<button class=\"btn btn-default \" onclick=\"goback()\">返回</button>";
	require_once("footer.php");
	exit();
}
if(!isset($_POST['captcha'])||strtolower($_POST['captcha'])!=$_SESSION['captcha']||$_SESSION['captcha_used']){
	echo "验证码输入错误！";
	$_SESSION['captcha_used']=true;
	quit();
}
$_SESSION['captcha_used']=true;
if(!isset($_POST['code'])){
	echo "您的来路不正确，请重新回到首页查询！<br/>";
	quit();
}
$json_obj=check($_POST['code']);
if($json_obj==false){
	echo "您的邀请码输入有误！<br/>";
	quit();
}
if(!isset($json_obj['ID'])){
	echo "您的邀请码输入有误！<br/>";
	quit();
}
$DB=$json_obj['ID'];
$Test=mysql_real_escape_string($DB);
$sql="select * from score_table_list where `ID`='$Test';";
$result = mysql_query($sql,$conn);
$database="";
$database_setting="";
if($row=mysql_fetch_array($result)){
	$database=$row['Table_Name'];
	$showname=$row['Name'];
	$database_setting=$row['Settings'];
	$setting_array=json_decode($database_setting,true);
	if(isset($json_obj['Class'])){
		echo "Your have chosen the test:<p style=\"color:red;\">$showname</p>.<br/>\n";
		$c=$json_obj['Class'];
		$jie='届';
		$ban='班';
		$sql2="select * from $database where Class like '%$jie$c$ban%' or Class='$c';";
		if($c==-1){
			$sql2="select * from $database";
			echo "All the class will be shown in this query.";
		}else{
			echo "The class which is ready to show:<p style=\"color:red;\">$c</p>";
		}
	}elseif(isset($json_obj['SQL'])){
		$sql2=$json_obj['SQL'];
		echo "Your hava chosen the test:$showname.<br/>\n";
		echo "Your SQL statement is:<p style=\"color:red;\">$sql2</p>\n";
	}else{
		echo "您的邀请码输入有误！<br/>";
		quit();
	}
	
	$result=mysql_query($sql2,$conn);
	echo "<table class=\"table table-bordered\">\n<thead><tr>";
	foreach($setting_array as $key => $value){
		echo "<td>$value</td>";
	}
	echo "</tr></thead>\n<tbody>\n";
	$flag=false;
	while($row=mysql_fetch_array($result)){
		$flag=true;
		echo "<tr>";
		foreach($setting_array as $key => $value){
			echo "<td>".$row[$key]."</td>";
		}
		echo "</tr>\n";
	}
	echo "</tbody><table>";
	if($flag==false){
		echo "<tr>没有查询到你搜索的成绩！</tr><br/>";
	}
}else{
	echo "您的来路不正确，请重新回到首页查询！<br/>";
}

?>
<button class="btn btn-default " onclick="goback()">返回</button>
<?php
require_once("footer.php");
?>