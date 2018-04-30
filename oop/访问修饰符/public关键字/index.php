<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Car.class.php';
$car = new Car();
echo "(1)通过汽车类对象调用汽车类的行驶方法的结果:".$car->run()."<br>";
echo "(2)通过汽车类的getSatus方法调用汽车行驶的方法结果：".$car->getStatus()."<br>";

require_once 'SmallCar.class.php';
$smallCar = new SmallCar();
echo "(3)通过汽车类的子类调用汽车类的汽车行驶方法的结果：".$smallCar->smallCarRun();

?>
</body>
</html>