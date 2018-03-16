<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$str = "123"; //定义字符串
	echo "转换前类型为：".gettype($str);//取得当前数据类型
	echo ", 原字符串输出：".$str;
	echo "<br>";
	echo "转换后输出".intval($str);//将字符串转换为整形
	echo ", 转换后类型为：".gettype(intval($str));//取得转换后的数据类型
	echo "<hr>";

	$int = 123; //定义整形变量
	echo "转换前类型为：".gettype($int);//取得当前数据类型
	echo ", 原字符串输出：".$int;
	echo "<br>";
	echo "转换后输出".strval($int);//将整形转换为字符串
	echo ", 转换后类型为：".gettype(strval($int));//取得转换后的数据类型

?>
</body>
</html>