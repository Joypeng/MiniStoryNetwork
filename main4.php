<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>发布小说</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="Style.Css" />
	<style type="text/css">
		body{color:#000;margin:0 auto;font: .8em MuseoSans100,"Lucida Grande", Tahoma, Verdana, Arial, "微软雅黑","华文细黑", "黑体", "宋体";background-color: #feffc6;}
		.d1 form{font-size:20px; }
		.d1 form input{font-size:15px; }
		.fb{text-align:center}
	</style>
	<script type="text/javascript">
	function check(form){
	var t = form.title.value;
		if(t.length==''){
			alert("小说名，不得为空!");
			return false;
		}
	}
	</script>
</head>
<body>
	<div class = "fb">
	<form action="main4check.php" method="post" onsubmit="return check(this);">

	<table width=100% border=0 cellpadding=3 cellspacing=1 class=css_table bgcolor='#E1E1E1'>
    <tr class=css_menu>
      <td colspan=3>
        <table width=100% border=0 cellpadding=4 cellspacing=0 class=css_main_table>
          <tr>
            <td class=css_main>发布新小说</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
       <td class="css_col11"><strong><font color = "#0000FF">小说名<input type="txt" name="title" maxlength=20/><br/><br/></a></strong>
	   
	   <input type="submit" value="发布"/>　　<input type="reset" value="清除"/></td>
    </tr>
  </table>
		</div>
		</form>
	</div>
	
</body>
</html>
