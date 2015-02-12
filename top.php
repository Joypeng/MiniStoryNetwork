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
	.a1{ width:600px;text-align:center;margin:30px auto;text-decoration: none;}
	.a3{ width:1000px;text-align:center;margin:30px auto;text-decoration: none;}
	.a3 a,.a1 a{font-size:30px; margin:8px 10px 8px 10px;text-decoration: none;}
	.a2 a{float:right; font-size:12px; width:120px; margin-right:50px;text-decoration: none;}
	.a2 a span{color:red;text-decoration: none;}
	#head_menu ul,li{list-style:none;float:left;}
	#head_menu li{background:#5BAA26;width:70px;height:24px;margin:0 2px 0 0;display:block;line-height:24px;color:#fff;text-align:center;}
	#head_menu li a{color:#fff;}
	.head_menu{padding:45px 10px 0 0;}
	</style>
	<script type="text/javascript">
		 
	</script>
</head>
<body>
	<?php
		//error_reporting(0);
		session_start();

		if(isset($_SESSION['user'])) {
	?>
	<div class="a3">
	<?php }else{ ?>
	<div class="a1">
	<?php } ?>
	
	<a href="main1.php" target="main">主页</a><a href="main2.php" target="main">小说浏览</a><a href="main3.php" target="main">统计模块</a>
	<hr/>
	<?php
		if(isset($_SESSION['user'])) { //登录后
	?>
	<a href="main4.php" target="main">发布小说</a><a href="main5.php" target="main">编辑小说</a>
	<hr/>
	<?php } ?>
	</div>
	<?php
		if(isset($_SESSION['user'])) { //登录后
	?>
	<div class="a2">
	<ul>
		<li><a>作家ID:<span><?php echo $_SESSION['user']; ?></span></a></li><li><a href="exitcheck.php" target="main">退出登录</a></li>
	</ul>
	</div>
	<?php } else { ?>
	<div class="right head_menu">
		<ul id="head_menu">
			<li><a href="login.php" target="main">登录</a></li>
			<li><a href="register.php" target="main">注册</a></li>
		</ul>
	</div>
	<?php } ?>
	
</body>
</html>
