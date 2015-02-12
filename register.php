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
	a{float:right; font-size:12px;}
	.a1{border:1px solid #DEECFA; }
	.a1 a{}
	</style>
	<script type="text/javascript">
	function rcheck(form){
			var checku =/^[0-9A-Za-z_]{6,15}$/;
			var checki =/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
			var user = form.user.value;
			var password1 = form.password.value;
			var password2 = form.password1.value;
			var idcard = form.id.value;
		//验证用户名
		if(!checku.test(user)){
			alert ("用户名输入有误!请重新输入……");
			form.user.focus;
			return false;
		}
		
		//验证密码
		if(password1.length<6){
			alert ("密码必须不小于六位!请检查并重新输入……");
			form.password.focus;
			return false;
		}
		if(password2!=password1){
			alert ("密码两次输入不相!请检查并重新输入……");
			form.password1.focus;
			return false;
		}
		//验证身份证
		if(!checki.test(idcard)){
			alert ("身份证输入有误!请检查并重新输入……");
			form.id.focus;
			return false;
		}
	}
	</script>
</head>
<body>
	<center><h1>注册界面</h1></center>
	<div class="a2">
	<center><form action="registercheck.php" method="post" onSubmit="return rcheck(this);">
	  　用户名<input type="txt" name="user"/></br></br>
	  　密　码<input type="password" name="password"/></br></br>
	  确认密码<input type="password" name="password1"/></br></br>
	  　身份证<input type="txt" name="id" maxlength="18"/></br></br>
　　　　<input type="reset" value="重新填写"/>　<input type="submit" value="注册"/>　
	</form></center>
	</div>
</body>
</html>
