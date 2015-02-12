<?php
//设置报警级别
	error_reporting(E_ALL ^ E_DEPRECATED);
/************************注册***************************/
	session_start();
	$user = $_POST['user'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	//链接数据库
	$conn = mysql_connect('localhost','root','');
	mysql_select_db('tushu',$conn);

	mysql_query("set names utf8");

	$sql = "insert into log(user,password,id) values('$user','$password','$id')";

	$res = mysql_query($sql);
	echo "<center><h1>注册界面</h1></center>";
	if($res<=0){
		echo "<center><h2>注册失败！用户名已存在！</h2></center><br/><br/>";
		echo "<center><a href='register.php'>返回重新注册</a></center>";
	}
	else {
		$_SESSION['user'] = $user;
		echo "<center><h2>注册成功！</h2></center><br/><br/>";
		echo "<center><a href='index.html' target='total'>点击登录</a></center>";
	}
?>