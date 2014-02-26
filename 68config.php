<form action="" method="post">
	我要购买<input type="text" size="2" value="1" name="num">件
	<input type="submit" name="sub" value="放入购物车" style="background-image:url()pic/button_2.jpg);color:red">
	<input type="submit" name="sub1" value="结账" style="background-image:url(pic/button_3.jpg);color:red">
<input type="submit" name="sub2" value="首页" style="background-image:url(pic/button_1.jpg);color:red">
</form>
<?php
	if($_POST[sub2]){
		echo "<script>location.href='index.php'</script>";
}	if($_POST[sub]){
		$str=explode("#".$_SESSION[id]);
		include("class/mysql.php");
		$sql="insert into tb_shop(id,name,number,money,moneyother,other"

}
?>
