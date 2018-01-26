<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$a = "123"; 
	$b = (array)$a;
	echo "字符串转换成数组：";
	print_r($b);
	echo "<hr>";

	$c = array(1,"asd");
	echo "数组转换成字符串：";
	$d = (string)$c;
	echo $d; //将数组强制转换成字符串时，数组将被转换成字符串“Array”，因此无法通过函数echo和print来输出数组的内容
?>
</body>
</html>