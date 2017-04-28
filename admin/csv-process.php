<?php
require_once("admin-header.php");
function endWith($haystack, $needle) {  
      $length = strlen($needle);  
      if($length == 0)
      {    
          return true;  
      }  
      return (substr($haystack, -$length) === $needle);
 }
function execute_SQL($sql,$conn){
	try{
		return mysql_query($sql,$conn);
	}
	catch(Exception $e){
		echo 'Message: ' .$e->getMessage();
	}
}
function drop_table($TN,$conn){
	$sql="drop table $TN;";
	execute_SQL($sql,$conn);
}
function import_CSV($TN,$Settings,$CSV_path,$conn){
	try{
	$setting_array=json_decode($Settings,true);
	$sql_setup="CREATE TABLE $TN ( ";
	$flag=false;
	foreach($setting_array as $key => $value){
		if(!$flag){//first
			$sql_setup.="`$key` VARCHAR(64) NOT NULL ";
			$flag=true;
		}else{//none-first
			$sql_setup.=", `$key` VARCHAR(64) NOT NULL ";
		}
	}
	$sql_setup.=') ENGINE = InnoDB;';
	execute_SQL($sql_setup,$conn);
	$original_sql_head="insert into $TN VALUES( ";
	if(($handle=fopen($CSV_path,'r'))!=false){
		while(($data=fgetcsv($handle))!=false){
			$temp_str=$original_sql_head;
			$num=count($data);
			if(count($data)!=count($setting_array)){
				return false;
			}
			for($i=0;$i<$num;$i++){
				if($i!=0){
					$temp_str.=' , ';
				}
				$t=$data[$i];
				if(trim($t)==''){
					$t='0';
				}
				$temp_str.="'$t'";
			}
			$temp_str.=' );';
			execute_SQL($temp_str,$conn);
		}
	}else{
		return false;
	}
	return true;
	}
	catch(Exception $e)
	{
		echo 'Message: ' .$e->getMessage();
	}
} 
$success=false;
if(isset($_POST['ID'])&&isset($_FILES['csv'])){
	$Database_ID=$_POST['ID'];
	$CSV_path=$_FILES["csv"]["tmp_name"];
	$CSV_name=$_FILES["csv"]["name"];
	if(endWith($CSV_name,".csv")){
		$sql="select * from score_table_list where `ID`=$Database_ID;";
		$result=mysql_query($sql,$conn);
		if($row=mysql_fetch_array($result)){
			$TN=$row['Table_Name'];
			$Settings=$row['Settings'];
			//$TN,$Settings,$CSV_path
			drop_table($TN,$conn);
			if(import_CSV($TN,$Settings,$CSV_path,$conn)){
				$success=true;
				$msg="导入CSV文件成功！";
			}else{
				$msg="出现未知错误！";
			}
		}else{
			$msg="数据库出现错误！无法在关联表中找到新建考试成绩的记录！";
		}
	}else{
		$msg="您上传的文件不是CSV格式！";
	}
}
?>
<div align="center" style="width:40%">
<div class="alert alert-<?php echo $success?"success":"danger"; ?>" id="msg"><?php echo $msg; ?></div>
</div>
<?php
require_once("footer.php");
?>