<?php
	for($a=1;$a<10;$a++){
	echo "<tr>";
	for($b=1;$b<=$a;$b++){
		echo "<td>";
		echo "$a*$b=".$a*$b."\n";
		echo "</td>";
}
	echo "</tr>";
}
?>
