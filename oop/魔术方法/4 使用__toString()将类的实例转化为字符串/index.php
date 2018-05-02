<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Circle.class.php';
$radius =2 ;
echo '园的半径为：'.$radius.'<br>';
echo new Circle($radius); //打印园面积
?>
</body>
</html>