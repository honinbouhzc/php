<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'SmallCar.class.php';
$car = new Car();
echo $car->run();
echo "<br>";
$smallCar = new SmallCar();
echo $smallCar->smallCarRun();
?>
</body>
</html>