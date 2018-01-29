<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php

// array_merge(array1,array2);将一个或者多个数组合并起来，一个数组中的值附加在前一个数组的后面，返回作为结果数组。如果输入的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值，然而如果数组中包含数字键名，后面的值将不会覆盖原来的值，而是附加到后面。如果只给了一个数组并且该数组数字索引的，则键名会连续的方式重新索引。

	$a = array("编程"=>"software","number"=>123,'value'=>true);
	echo "数组1：";
	print_r($a);
	echo "<br>";

	$b = ["Aaron Rodgers","Phillip Rivers","Drew Brees","Tom Brady"];
	echo "数组2：";
	print_r($b);
	echo "<br>";

	$c = array_merge($a,$b);
	echo "合并后的新数组：";
	print_r($c);
	echo "<br>";
 ?>
</body>
</html>