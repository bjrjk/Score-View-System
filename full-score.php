<?php
require_once("header.php");
?>
<h2>成绩查询系统</h2>
<?php
function check_num($num,$cnt){
	if($cnt>10){
		return -1;
	}
	$n=0;
	while($num!=0){
		$n+=$num%10;
		$num/=10;
	}
	if($n<10){
		return $n;
	}else{
		return check_num($n,$cnt++);
	}
}
function check($code){
	$arr=explode('-',$code);
	$num=0;
	foreach ($arr as $str){
		$num+=intval($str);
	}
	if($num%2==0){
		return false;
	}
	if(check_num($num,0)==7){
		return true;
	}else{
		return false;
	}
	
}
if(!isset($_POST['captcha'])||strtolower($_POST['captcha'])!=$_SESSION['captcha']||$_SESSION['captcha_used']){
	echo "验证码输入错误！";
	$_SESSION['captcha_used']=true;
	echo "<button class=\"btn btn-default \" onclick=\"goback()\">返回</button>";
	require_once("footer.php");
	exit();
}
$_SESSION['captcha_used']=true;
if(!isset($_POST['code'])||(isset($_POST['code'])&&!check($_POST['code']))){
	echo "您的来路不正确，请重新回到首页查询！<br/>";
	echo "<button class=\"btn btn-default \" onclick=\"goback()\">返回</button>";
	require_once("footer.php");
	exit();
}
if(isset($_POST['Test'])){
		$Test=mysql_real_escape_string($_POST['Test']);
		$sql="select * from score_table_list where `ID`='$Test';";
		$result = mysql_query($sql,$conn);
		$database="";
		$database_setting="";
		if($row=mysql_fetch_array($result)){
			$database=$row['Table_Name'];
			$database_setting=$row['Settings'];
			$setting_array=json_decode($database_setting,true);
			$sql="select * from $database;";
			$result=mysql_query($sql,$conn);
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
}else{
	echo "您的来路不正确，请重新回到首页查询！<br/>";
}
?>
<button class="btn btn-default " onclick="goback()">返回</button>
<?php
require_once("footer.php");
?>