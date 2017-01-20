<?php
require_once("header.php");
?>
<h2>考试数据表配置——导入CSV</h2>
<p>请在导入之前确认CSV文件完全符合表字段json（且不能有表头，csv文件必须为utf-8编码），导入程序将会自动生成mysql数据。若CSV文件格式出现错误，一切问题请自行负责。</p>
<div align="center" style="width:40%">
<form method="post" role="form" enctype="multipart/form-data" action="csv-process.php">
<p>数据表ID：</p>
<input type="text" name="ID" class="form-control" value="<?php echo $_REQUEST['ID']; ?>" />
<br/>
<p>上传CSV文件：</p>
<input type="file" name="csv" class="form-control"/>
<br/>
<input type="submit" class="btn btn-default" value="提交"/>
</form>
</div>
<?php
require_once("footer.php");
?>