<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$str = "你好 PHP 很高兴认识你。";
	$explode = explode(" ", $str);
	echo "源字符串：".$str."<br>";
	echo "分割后的数组为：";
	print_r($explode);
	echo "<br>";
	$implode = implode($explode);
	echo "合成后的字符串:".$implode."<br>";
?>
</body>
</html>