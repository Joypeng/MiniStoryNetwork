<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>小说浏览区</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="Style.Css" />
	<style type="text/css">
	.b1{text-align:center;}
	body{color:#000;margin:0 auto;font: .8em MuseoSans100,"Lucida Grande", Tahoma, Verdana, Arial, "微软雅黑","华文细黑", "黑体", "宋体";background-color: #feffc6;}
	</style>
	<script type="text/javascript"></script>
</head>
<body>
	<?php 
		require_once 'output.class.php';
	?>
	<table width=100% border=0 cellpadding=3 cellspacing=1 class=css_table bgcolor='#E1E1E1'>
		<tr class=css_menu>
		  <td colspan=3>
			<table width=100% border=0 cellpadding=4 cellspacing=0 class=css_main_table>
			  <tr>
				<td class=css_main>小说浏览</td>
			  </tr>
			</table>
		  </td>
		</tr>
	  </table>
	<div class="b1">
		<?php
			$sql = "select * from book";
			shownow($sql,'1');
		?>
	</div>
</body>
</html>
