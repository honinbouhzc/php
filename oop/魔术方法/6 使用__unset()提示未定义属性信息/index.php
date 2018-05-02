<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Car.class.php';
$car = new Car('Audi','black');
unset($car->price);//使用__unset（）方法释放Car类中未定义的属性price
?>
</body>
</html>