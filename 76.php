<?php
	for($a=1;$a<10;$a++)
{
	if($a%2==0){
		continue;
}echo "<tr>";
	for($b=1;$b<10;$b++){

		if($b%2!=0){
			echo "<td>";
			echo "$a*$b=".$a*$b;
			echo "</td>";
}		else{continue;}
}
echo "</tr>";
}
?>
