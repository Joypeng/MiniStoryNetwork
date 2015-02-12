<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>编辑章节页</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css">
		body{color:#000;margin:0 auto;font: .8em MuseoSans100,"Lucida Grande", Tahoma, Verdana, Arial, "微软雅黑","华文细黑", "黑体", "宋体";background-color: #feffc6;}
	</style>
	<script type="text/javascript"></script>
</head>
<body>
	<?php 
		$title = $_GET['title'];
	?>
	<center><h1>编辑章节页</h1></center>
	<center><a href="main5_2.php?title=<?php echo $title;?>">上传章节</a></center><br/><br/>
	<?php
		require_once 'output.class.php';
		$sql = "select * from content where title='$title'";
		$res = shownow($sql,'4');
		if($res=='0'){
		?>
	<br/><br/>
	<center><h5>没有章节，请上传章节！</h5></center>
	<?php } else {?>
	<br/><br/>
	<center><h5>本书共<?php $res=$res-1;  echo $res;?>章</h5></center>
	<?php } ?>
</body>
</html>
