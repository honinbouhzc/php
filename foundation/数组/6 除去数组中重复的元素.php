<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$a = array("a","b","a","c","d","a","e","a","f");
	echo "原数组";
	print_r($a); //打印这个数组
	echo "<br>";
// array_unique()函数是除去数组中重复的元素，返回一个没有重复元素的新数组，每一个值只保留第一个遇到的键名，后面的键名全忽略
	$b = array_unique($a); 
	echo "新数组";
	print_r($b);
 ?>
</body>
</html>