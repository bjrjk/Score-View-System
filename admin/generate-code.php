<?php
require_once("admin-header.php");
require_once("../check.php");
if(isset($_POST['cleartext'])){
    $cleartext=trim($_POST['cleartext']);
    $result=encrypt($cleartext);
}
?>
<div align="center" style="width:50%">
<h2>InviteCode生成系统</h2>
<form method="post" role="form">
<p>明文</p>
<textarea name="cleartext" id="cleartext" class="form-control"/><?php echo $cleartext;?></textarea>
<input type="submit" class="btn btn-default" value="提交" >
</form>
<p>密文</p>
<textarea class="form-control"/><?php echo $result;?></textarea>
<div>
<h3>样例格式：</h3>
<div align="center" style="float:left;width:40%">
班级样例格式：
<br/>
<code id="C">
{"ID":*,"Class":*}
</code>
<br/>
<script>
function trim(str){
　　     return str.replace(/(^\s*)|(\s*$)/g, "");
}
function C_cpy(){
	document.getElementById("cleartext").innerHTML=trim(document.getElementById("C").innerHTML);
}
</script>
<button onclick="C_cpy()" value="复制" class="btn btn-primary">复制</button>
</div>
<div align="center" style="float:right;width:40%">
SQL样例格式：
<br/>
<code id="S">
{"ID":*,"SQL":"*"}
</code>
<br/>
<script>
function S_cpy(){
	document.getElementById("cleartext").innerHTML=trim(document.getElementById("S").innerHTML);
}
</script>
<button onclick="S_cpy()" value="复制" class="btn btn-primary">复制</button>
</div>
</div>
</div>
<?php
require_once("footer.php");
?>

