<?php
function st(){
	if($_POST[sub]){
	$a="我是被截取的字符串的一部分哈哈哈";
	$rs=substr($a,(2*$_POST['text']-2,(2*$_POST['text']-1));
	echo $rs;
}
}
st();
?>
