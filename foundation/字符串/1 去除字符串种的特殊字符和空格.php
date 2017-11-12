<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$a = "(:@_@  你好！PHP范例  @_@:)";	//声明一个带空格和特殊字符的字符串变量。
	$b = ltrim($a);//去除变量左边的空格
	$c = ltrim($b,"(:@_@");//去除变量左边的特殊字符
	$d = rtrim($c);//去除变量右边的空格
	$e = rtrim($d," @_@:)"); //去除变量右边的特殊字符
	echo "去除字符空白和特殊字符前：".$a."<br>";
	echo "去除特殊字符和字符空白后：".$e."<br>"; //输出最后的结果
?>
</body>
</html>