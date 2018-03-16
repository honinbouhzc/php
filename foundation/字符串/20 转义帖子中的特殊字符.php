<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$str = "mingri";  // 定义字符串变量
	$str1 = "$.\+*?[]^()$str"; //定义字符串变量
	echo "转换前：".$str1."<br>";
	echo "转换后：".quotemeta($str1); // 转换特殊字符
 ?>
</body>
</html>