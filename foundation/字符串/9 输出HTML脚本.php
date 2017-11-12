<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	echo "<h2>没有进行字符转换</h2>";
	$str = "<table border = '1'><tr><td>标题：经济半小时</td><td>修改时间：2010-06-03</td></tr><tr><td>内容：经济半小时，了解中国经济最好的节目</td></tr></table>";
	echo $str;
	echo "<br>";
	echo "<h2>进行字符转换</h2>";
	$str1 = htmlentities($str,ENT_QUOTES,"GB2312");
	echo $str1;
?>
</body>
</html>