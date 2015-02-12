<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>阅读</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css">
	body{color:#000;margin:0 auto;font: .8em MuseoSans100,"Lucida Grande", Tahoma, Verdana, Arial, "微软雅黑","华文细黑", "黑体", "宋体";background-color: #feffc6;}
	.f1{float:right; }
	.f2{text-align:center;margin-top:30px;}
	.f3{text-align:center; }
	.f2 a{margin:8px 10px;}

	</style>
	<script type="text/javascript">
		org_Color=document.bgColor.substring(1.10)
	</script>
</head>
<body>
	<?php
		$title =$_GET['title'];
		$stat = $_GET['stat'];
		require_once 'MYSQLTOOL.class.php';
		$mysql = new MYSQLTOOL();
		$sql = "select * from content where title='$title'";
		$res = $mysql->dql($sql);
		$rows = mysql_affected_rows();

		$sql = "select chapter,chapters from content where title='$title' and stat='$stat'";

		$res = $mysql->dql($sql);
		
		$row = mysql_fetch_assoc($res);
	?>
	<div class="f1">
	<h5>《<?php echo $title; ?>》</h5>
	</div>
	<div class="f2">
	<h1><?php echo $row['chapter']; ?></h1>
	<div class="f3">
	
		<pre><?php echo $row['chapters']; ?></pre>

	</div>
	<a href="?title=<?php echo $title;?>&stat=<?php if($stat>1) $stat--; echo $stat;?>">上一章</a>
	<a href="?title=<?php echo $title;?>&stat=<?php  if($stat<$rows) {$stat++;$stat++;} echo $stat;?>">下一章</a>
	</div>
	
	



</body>
</html>
