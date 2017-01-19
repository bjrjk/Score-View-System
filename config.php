<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING^E_DEPRECATED);
define('SQL_ADDRESS','localhost');
define('SQL_DATABASE','test');
define('SQL_USERNAME','test');
define('SQL_PASSWORD','test');
define('ID_Length',9);
$conn=mysql_connect(SQL_ADDRESS,SQL_USERNAME,SQL_PASSWORD) or die("数据库连接错误！");
mysql_query("set names 'utf8'");
mysql_select_db(SQL_DATABASE);
?>