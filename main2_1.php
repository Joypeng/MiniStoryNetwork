<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>章节页</title>
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
		<center><h1>小说阅读</h1></center><br/>
		<center><h1><?php echo $title; ?></h1></center>
		<?php
		require_once'output.class.php';
		$sql = "select * from content where title='$title'";
		$res = shownow($sql,'2');
		if($res=='0'){
			
	?>
	<center><h3>小说未开始上传，请阅读其他书！</h3></center><br/>
	<?php }else { ?>
	<center><h5>小说共<?php $res-=1; echo $res; ?>章</h5></center><br/>
	<?php }?>
</body>
</html>
