<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING^E_DEPRECATED);
define('SQL_ADDRESS','localhost');
define('SQL_DATABASE','test');
define('SQL_USERNAME','test');
define('SQL_PASSWORD','test');
$conn=mysql_connect(SQL_ADDRESS,SQL_USERNAME,SQL_PASSWORD) or die("数据库连接错误！");
mysql_query("set names 'utf8'");
mysql_select_db(SQL_DATABASE);
function getIP() { 
if (getenv('HTTP_CLIENT_IP')) { 
$ip = getenv('HTTP_CLIENT_IP'); 
} 
elseif (getenv('HTTP_X_FORWARDED_FOR')) { 
$ip = getenv('HTTP_X_FORWARDED_FOR'); 
} 
elseif (getenv('HTTP_X_FORWARDED')) { 
$ip = getenv('HTTP_X_FORWARDED'); 
} 
elseif (getenv('HTTP_FORWARDED_FOR')) { 
$ip = getenv('HTTP_FORWARDED_FOR'); 

} 
elseif (getenv('HTTP_FORWARDED')) { 
$ip = getenv('HTTP_FORWARDED'); 
} 
else { 
$ip = $_SERVER['REMOTE_ADDR']; 
} 
return $ip; 
}
$IP=getip();
$UserAgent=$_SERVER['HTTP_USER_AGENT'];
?>