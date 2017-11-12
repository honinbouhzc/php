<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			font-size: 16px;
			color:#009;
			font-family:'微软雅黑';
			background:url("../image/1.jpg");
		}
	</style>
</head>
<body>
<?php 
	include('inc.php');
	$sql = 'select * from tb_include';
	$rs = mysql_query($sql);
	while($res = mysql_fetch_array($rs)){
		echo '编号：'.$res[0].'&nbsp;&nbsp;姓名：'.$res[1]."<br>";
	}
?>
</body>
</html>