<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$a  = array('a',"b","c","d","e");
// 用arra_pop()是取出数组中的最后一个一个元素，而不是复制，所以每次使用此函数数组元素就会减少一个
		echo "获取数组中的最后一个元素是：". array_pop($a); //e
		echo "<br>";
		echo "再次获取数组中的最后一个元素是：". array_pop($a); //d
	 ?>
</body>
</html>