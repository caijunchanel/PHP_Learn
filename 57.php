<?php
	switch($_GET['link'])
	{
	case "主页";
	require_once('inc57.php');
	break;
	case "注册";
	require_once('inc57_1.php');
	break;
	case "浏览";
	require_once('inc57_2.php');
	break;
	default;
	include('inc57_1.php');
	}
?>
