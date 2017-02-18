<?php
require_once("header.php");
session_unset();
session_destroy();
require_once("footer.php");
?>
<script language="javascript" type="text/javascript"> 
window.location.href="login.php"; 
</script> 