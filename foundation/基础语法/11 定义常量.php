<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	define("PI", 3.1415926535);
	$r = 10 ;
	$squ = PI * ($r * $r);
	echo '半径为10的圆面积是'.$squ;
	echo '<br>';

	//defined()函数，定义常量是否被定义
	echo defined('PI'); //1
 ?>
</body>
</html>