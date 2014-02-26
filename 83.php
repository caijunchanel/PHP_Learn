<?php
	$a="(:@_@ 你好! PHP 范例 @_@:)";
	$b=ltrim($a);
	$c=ltrim($b,":@_@");
	$d=rtrim($c);
	$e=rtrim($d,"@_@:)");
	echo "去除字符串空白和特殊字符前:".$a."<br>";
	echo "去除字符串空白和特殊字符后:".$e;
?>
