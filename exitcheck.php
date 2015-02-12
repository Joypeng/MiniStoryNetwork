<?php
//点击退出(在用户名后面的退出)后执行的代码
	session_start();
	unset($_SESSION['user']);
	
	echo '<script type="text/javascript">top.location.href="index.html";</script>';
?>