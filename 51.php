<?php
	$a=0;
	echo "后置加运算"; 
	for($b=0;$b<=10;$b++)
	{
		echo $a++;
	}
	
	echo "前置加运算"; 
	$d=0;
	for($b=0;$b<=10;$b++)
	{
		echo ++$d;
	}
	
	echo "前置减运算"; 
	$f=10;
	for($b=0;$b<=10;$b++)
	{
		echo --$f;
	}
	$g=10;
	echo "后置减运算"; 
	for($b=0;$b<=10;$b++)
	{
		echo $g++;
	}
	
?>
