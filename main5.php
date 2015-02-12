<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>编辑小说</title>
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
	session_start();
	require_once 'output.class.php';

?>
	<center><h1>编辑小说</h1></center>
	<br/><center><h5>点击小说名章节编辑！</h5></center>
	<div class="e1">
	<?php
		$user = $_SESSION['user'];
		$sql = "select title from book where(author='$user')";
		$res = shownow($sql,'3');
		if($res=='0'){
			echo "<br/><br/><center><h4>您没有发布小说！</h4></center>";
		}else {
			$res -=1;
			echo "<br/><center><h4>您总共发布".$res."本小说！</h4></center>";
		}
		?>
	</div>
</body>
</html>
