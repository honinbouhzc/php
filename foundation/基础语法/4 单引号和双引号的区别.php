<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
//单引号和双引号的最大区别是：
//单引号包含变量按照普通字符串来输出
//双引号包含的变量会自动输出变量的值
	$a = 1 ;
	echo "输入变量值为$a"; //输入变量值为1
	echo "<br>";
	echo '输入字符串$a';  //输入字符串$a
 ?>
</body>
</html>