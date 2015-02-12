<?php
	$title = $_POST['title'];
	$chapter = $_POST['chapter'];
	$chapters = $_POST['chapters'];

	require_once 'MYSQLTOOL.class.php';
	$mysql = new MYSQLTOOL();
	$sql = "select stat from content where title='$title'";

	$res = $mysql->dql($sql);
	
	$rows = mysql_affected_rows();
	
	if(isset($rows)){
		$stat = $rows;
	}else
		$stat = 1;

	echo $stat;

	$sql = "insert into content(stat,title,chapter,chapters) values('$stat','$title','$chapter','$chapters')";

	echo "<center><h1>上传章节</h1></center>";
	$res = $mysql->dml($sql);
	if($res=='1'){
		echo "<center><h4>上传成功！</h4></center>";
		
	}else{

		echo "<center><h4>上传失败！</h4></center>";

	}
		
?>