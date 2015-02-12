<?php
	$id = $_POST['id'];
	$chapter = $_POST['chapter'];
	$chapters = $_POST['chapters'];

	require_once 'MYSQLTOOL.class.php';
	$mysql = new MYSQLTOOL();
	$sql = "update content set chapter='$chapter',chapters='$chapters' where id='$id'";

	
	echo "<center><h1>修改章节</h1></center>";

	$res = $mysql->dml($sql);
	if($res>'0'){
		echo "<center><h4>修改成功！</h4></center>";
		
	}else{

		echo "<center><h4>修改失败！</h4></center>";

	}
		
?>