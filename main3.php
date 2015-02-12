<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>小说统计模块</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css">
		body{color:#000;margin:0 auto;font: .8em MuseoSans100,"Lucida Grande", Tahoma, Verdana, Arial, "微软雅黑","华文细黑", "黑体", "宋体";background-color: #feffc6;}
	</style>
	<script type="text/javascript"></script>
</head>
<body>
<div class="c1">
<?php
	require_once'output.class.php';

	$sql = "select title from book";
	?>
<div class="c2">
<center><h2>小说</h2></center>
<?php 
	$res = shownow($sql,'5'); 
	$res-=1;
	echo "<center><h5>一共".$res."本小说</h5></center>";
?>
<?php
	$sql = "select distinct author from book";
?>
<center>作者</center>
<?php 
	$res = shownow($sql,'6'); 
	$res-=1;
	echo "<center><h5>一共".$res."个作者</h5></center>";
?>
</div>
</div>
</body>
</html>
