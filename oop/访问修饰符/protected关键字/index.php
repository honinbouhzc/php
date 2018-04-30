<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'SmallCar.class.php';
$repairTime = 3;
$car = new Car($repairTime);
//echo '通过类实例的对象直接调用类中的保护成员的结果<br/>';
//echo '汽车保修年限为：'.$car->repairTime.'年<br/>';
echo '在类体内调用保护成员的结果<br/>';
echo '汽车保修年限为：'.$car->getRepairTime().'年<br/>';
echo '在类子类中调用保护成员的结果<br/>';
$repairTime1 = 5;      //定义保修年限
$smallCar = new SmallCar($repairTime1);
echo '小汽车保修年限为：'.$smallCar->getSmallCarReqairTime().'年<br/>';
?>
</body>
</html>