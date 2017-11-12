<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 

	$a = 10;
	$b = '我是字符串数据';

	$e = $a + $b;

	echo '自动类型转换:<br>';
	echo '10+我是字符串数据 ='.$e.'<br>';
	echo '强制类型转换<br>:';
	//在变量前将想要转换的数据类型写到括号内称为强制转换
	echo '10+我是字符串数据 ='.(string)$e.'<br>';

	var_dump((string)$e);
	echo '<br>';
	var_dump($e);
?>
</body>
</html>