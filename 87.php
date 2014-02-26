<?php
	$str="您好 PHP 很高兴认识您。";
	$explode=explode("",$str);
	echo "原字符串:".$str."<br>";
	echo "经分割后的数组为:";
	print_r($explode);
	echo "<br>合成后的字符串:";
	echo implode($explode);
?>
