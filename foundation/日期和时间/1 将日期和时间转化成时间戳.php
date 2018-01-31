<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	echo "当前时间：".date('Y-m-d H:i:s');
	echo "<br>";
	echo "把当前时间转化成时间戳为：".time();
	echo "<br>";
	echo "把当前时间转化成时间戳的另一种方法：".strtotime('now');
?>
</body>
</html>