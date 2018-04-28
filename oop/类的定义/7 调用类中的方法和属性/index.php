<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Car.class.php';
$color = '红色';
$car = new Car($color);
echo "汽车的颜色是".$car->color;
echo "<br>在行驶过程中---".$car->stop();
?>
</body>
</html>