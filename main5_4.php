<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>新网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css">
	body{color:#000;margin:0 auto;font: .8em MuseoSans100,"Lucida Grande", Tahoma, Verdana, Arial, "微软雅黑","华文细黑", "黑体", "宋体";background-color: #feffc6;}
	form input{font-size:24px;}
	textarea{font-size:18px; width:800px; height:600px;resize:none;}
	.d1{width:800px; margin-bottom:10px;}
	</style>
	<script type="text/javascript"></script>
</head>
<body>
<?php
	require_once'MYSQLTOOL.class.php';

	$mysql = new MYSQLTOOL();

	$id = $_GET['id'];

	$sql = "select title,chapter,chapters from content where id='$id'";

	$res = $mysql->dql($sql);
	$row = mysql_fetch_assoc($res);

?>
	
	<center><h1>修改章节</h1></center><br/>
	<center><h2>《<?php echo $row['title']; ?>》</h2></center><br/>
	<center><form action="main5_4check.php" method="post">
	<input name="id" type="hidden" value="<?php echo $id; ?>">
	<input class="d1" name="chapter" type="txt" value="<?php echo $row['chapter'];?>" maxlength="30"/><br/>
	<textarea name="chapters">
	<?php echo $row['chapters'];?>
	</textarea><br/>
	<input type="submit" value="修改章节"/>
	</form></center>


</body>
</html>

