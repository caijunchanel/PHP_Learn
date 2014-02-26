<?php
	$array=array("image/11.png","image/2.png","image/3.png","image/4.png");
	for($a=0;$a<4;$a++){

		$rand=rand(0,3);
		echo "<img src='$array[$rand]'>";
	}
?>
