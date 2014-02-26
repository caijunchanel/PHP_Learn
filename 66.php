<?php
$conn=mysql_connect("localhost","root","chanel110");
mysql_select_db("db_database02",$conn);
mysql_query("SET NAMES GBK");
$rs=mysql_query("select*from tb_while");
do{
	echo ""
}while($rst=mysql_fetch_array($rs));
?>
