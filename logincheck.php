<?php

//设置报警级别
	error_reporting(E_ALL ^ E_DEPRECATED);
//***************登录*******************************
	session_start();
	$user = $_POST['user'];
	$password = $_POST['password'];

	//链接数据库
	$conn = mysql_connect('localhost','root','');
	mysql_select_db('tushu',$conn);

	mysql_query("set names utf8");
	
	$sql = "select * from log where(user='$user')";

	$res = mysql_query($sql);

	$row = mysql_fetch_assoc($res);
	
	if($user==$row['user']&&$password==$row['password']){
		$_SESSION['user'] = $user;
		echo '<script type="text/javascript">top.location.href="index.html";</script>';
	}else{
		echo "<center><h1>登录界面</h1></center><br/><br/>";
		echo "<center><h2>登录失败，请检查密码和用户名！</h2></center>";
	}

?>