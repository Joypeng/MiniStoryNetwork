<?php
	require_once'MYSQLTOOL.class.php';

	$mysql = new MYSQLTOOL();

	$id = $_GET['id'];

	$sql = "delete from content where id='$id'";

	$res = $mysql->dml($sql);
	echo "<center><h1>删除章节</h1></center><br/>";
	if($res>'0'){
		echo "<center><h4>删除成功！</h4></center>";
		
	}else{

		echo "<center><h4>删除失败！</h4></center>";

	}
?>