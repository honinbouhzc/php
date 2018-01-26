<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	echo "输出二维数组：";
	$a = array(1,"asd","经济",true,array("a","1q2w3e",1));
	print_r($a);
	echo "<br>";

	echo "输出二维数组键值为4的元素：";
	print_r($a[4]);
?>
</body>
</html>