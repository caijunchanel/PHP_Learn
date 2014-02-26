<?php
include("inc.php");
$sql="select*from tb_include";
$rs=mysql_query($sql);
while($rst=mysql_fetch_array($rs))
	{echo '编号:'.$rst[1].'姓名:'.$rst[0]."<br>";}
?>
