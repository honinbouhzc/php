<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
$a = array("编程"=>"software","number"=>123,'value'=>true);
$k = array_rand($a);
echo $k."随机获取元素：".$a[$k];

// array_rand($a);在你想从数组中取得1个或多个随机元素时使用，他接受一个可选参数，指明了你想取多少个元素，如果没有指定，默认值为1.如果你只取一个，array_rand()函数返回一个随机元素的键名，否则就返回一个包含随机键名的数组，这样你就可以随机从数组取出键名和值了
?>
</body>
</html>