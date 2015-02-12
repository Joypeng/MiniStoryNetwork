<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="" />
<title></title>
</head>

<body>
<?php 
//设置报警级别
	error_reporting(E_ALL ^ E_DEPRECATED);
//*************************************************输出表中全部信息**************************************************
	function shownow($sql,$j){
		$a = 1;//a的值用于返回
		$conn = mysql_connect("localhost","root","");
		if(!$conn){
			die(mysql_error());
		}

		mysql_select_db("tushu",$conn);
		mysql_query("set names utf8");

		$res = mysql_query($sql,$conn);

		//多少行$rows，多少列$colums
		$rows = mysql_affected_rows($conn);
		$colums = mysql_num_fields($res);

		if($rows!=0){
		echo "<table align='center'> ";
		//j=1时查看的是book表中数据
			if($j=='1'){
				while($row=mysql_fetch_row($res)){
				echo "<tr>";
				
				for($i=0;$i<$colums;$i++){
					if($i=='1')
						echo "
					
							<table width=50% border=0 class=css_main_table>
							  <tr>
								<td class=css_main>作者：<td>$row[$i]</td></td>
							  </tr>
							</table>
				
					";
					if($i=='0')
						echo "
				
							<table width=50% border=0 class=css_main_table>
							  <tr>
								<td class=css_main>小说名：<td>《$row[$i]》</td></td>
								<td><a href='main2_1.php?title=$row[0]'>查看</a></td>
							  </tr>
							</table>
					
					
					";
				}
			}

			echo "</tr>";
			}
			//j=2时查看的是content内容
			if($j=='2'){
				while($row=mysql_fetch_row($res)){
					$a++;
				echo "<tr>";
				for($i=0;$i<$colums;$i++){
					if($i=='1'){
						echo "<th>第".$row[$i]."章</th>";
					}
					if($i=='3'){
						echo "<td>$row[$i]</td>";
					}

				}
				
				echo "<td><a href='main2_2.php?stat=$row[1]&title=$row[2]'>阅读</a></td>";
			}

			echo "</tr>";
			}
			//j=3时查看的是小说名
			if($j=='3'){
				while($row=mysql_fetch_row($res)){
				echo "<tr>";
				
				for($i=0;$i<$colums;$i++){
					echo "<td><a href='main5_1.php?title=$row[0]'>小说名：《$row[$i]》</a></td>";
				}
				echo "</tr>";
				$a++;
				}
			}

			//j=4进行章节编辑
			if($j=='4'){
				while($row=mysql_fetch_row($res)){
				echo "<tr>";
				
				for($i=0;$i<$colums;$i++){
					if($i=='1')
					echo "<td>第$row[$i]章</td>";
					if($i=='3')
					echo "<td>$row[$i]</td>";
				}
				echo "<td><a href='main5_3.php?id=$row[0]'>删除</a></td><td><a href='main5_4.php?id=$row[0]'>修改</a></td>";
					echo "<td><a href='main2_2.php?stat=$row[1]&title=$row[2]'>阅读</a></td>";
				echo "</tr>";
				$a++;
				}
			}

			//j=5统计小说
			if($j=='5'){
				while($row=mysql_fetch_row($res)){
				echo "<tr>";
				for($i=0;$i<$colums;$i++){
					echo "
					
					
					<td>《$row[$i]》</td>";
				}
				$a++;
				}
			}

			//j=6统计作者
			if($j=='6'){
				while($row=mysql_fetch_row($res)){
				echo "<tr>";
				for($i=0;$i<$colums;$i++){
					echo "<td><a href='main3_1.php?author=$row[$i]'>$row[$i]</td>";
				}
				$a++;
				}
			}

			echo "<table>";

			mysql_free_result($res);
		}else
			return 0;
		return $a;
	}
	

?>

</body>
</html>