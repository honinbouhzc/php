<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$a = array(1,'精心','ash',true);//创建一个数组
	echo "原数组";
	print_r($a); //打印这个数组
	echo "<br>";

	$a[1] = "经济";
	echo "新数组";
	print_r($a);
?>
</body>
</html>