<?php
	//*******************发布小说**************
	require_once 'MYSQLTOOL.class.php';
	session_start();
	
	$mysql = new MYSQLTOOL();
	
	$user = $_SESSION['user'];
	$title = $_POST['title'];

	$sql="insert into book(author,title) values('$user','$title')";

	$res = $mysql->dml($sql);

	echo "<center><h1>发布小说</h1></center>";

	if($res=='1'){
		echo "<center><h3>发布成功！</h3></center><br/><br/>";
		echo "<center><a href='main4.php'>返回继续发布！</a></center>";
	} else {
		echo "<center><h3>失败！</h3></center><br/><br/>";
		echo "<center><a href='main4.php'>返回继续发布！</a></center>";
	}

?>