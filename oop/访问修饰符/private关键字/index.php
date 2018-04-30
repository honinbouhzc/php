<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Car.class.php';
$color = "red";
$car = new Car($color);

//echo '通过类实例的对象调用类的私有属性的结果：<br>';
//echo @'汽车的颜色是'.$car->color.die('不能通过类的对象调用类的私有方法<br>');

echo "在类中的方法中调用类的私有属性：<br>";
echo "汽车的颜色是：".$car->getColor();
?>
</body>
</html>