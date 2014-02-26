<?php
  echo "<form action='' method='post'>";
  echo "user: <input type='text' name='text'><br>";
  echo "passwd:<input type='password' name='pwd'>";
  echo "<input type='submit' name ='sub' value='OK'";
  echo "</form>";
  if($_POST[sub]){
	if($_POST[text]=="mr" && $_POST[pwd]=="mrsoft"){
		echo "<script>alert('Is admin user ');</script>";}
	else{echo "<script>alert('Not admin user');</script>";}
}
?>
