<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$a = array("积极","asd",1,"bbc",true);
	echo "原数组";
	print_r($a); //打印这个数组
	echo "<br>";

	srand((float)microtime()*1000000); //srand()函数播下本函数随机数发生器的种子，在使用shuffle函数时必须使用，否则得不到预期效果
	shuffle($a);
	echo "新数组";
	print_r($a);
?>
</body>
</html>