<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>查看作者小说</title>
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
		$author =$_GET['author'];
		?>
	<center><h1>查看<?php echo $author; ?>作者所写的小说</h1></center>
	<?php
		require_once'output.class.php';
		$sql = "select title from book where author='$author'";
		$res = shownow($sql,'5');
		
		echo "<br/><center><h5>总共写了".--$res."本小说！</h5></center>";
	?>
</body>
</html>
