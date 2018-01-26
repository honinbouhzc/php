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

	$rand = rand(0,4); //创建一个0-4的随机数
	echo "随机取得的数组元素是：" . $a[$rand]; //将随机数作为键值获取数组元素
?>
</body>
</html>