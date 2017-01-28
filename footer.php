<?php
$sql="SELECT * FROM `famous` ORDER by rand() limit 1";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_array($result);
$famous=$row['Content'];
?>
<br/><br/>
<p><?php echo $famous; ?></p>
<?php
mysql_close();
?>
</div>
</body>
</html>