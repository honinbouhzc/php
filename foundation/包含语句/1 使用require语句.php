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

		table{
			text-align:center;
			border:1px;
		}
	</style>
</head>
<body >
<table><tr><td  align="center" width="364">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/1.jpg" border="0" usemap="#Map">
<map name="Map"><area shape="rect" coords="5,7,97,45" href="1%20使用require语句.php?link=我的家乡"></map>&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/2.jpg" border="0" usemap="#Map2">
<map name="Map2"><area shape="rect" coords="1,3,97,46" href="1%20使用require语句.php?link=幽默笑话"></map>
</td></tr><tr><td height="157">

<?php 
require('inc.php'); 

switch ($_GET['link']) {  //接受地址栏的值
	case '我的家乡';
		echo $str1;
		break;
	
	case '幽默笑话';
		echo $str2;
		break;
}
?>
</body>
</html>