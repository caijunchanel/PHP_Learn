<?php
<table>
<tr>
<input type='text' name='user'>;
<input type='text' name='pwd';
<input type='submit' name='sub' value='ok'>;
</tr>
</table>
	if($_POST['user']=='mr' and $_POST['pwd']=='mrsoft'){
		echo "当前是VIP用户";
}else{
	echo "您只是一个游客";

}
}
?>
