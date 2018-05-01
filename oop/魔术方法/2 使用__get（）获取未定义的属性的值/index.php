<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Apple.class.php';
$apple = new Apple('红色','圆形','0.4kg');
echo $apple->getProperty();
echo $apple->getArea;
?>
</body>
</html>