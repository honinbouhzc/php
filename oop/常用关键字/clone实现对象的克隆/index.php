<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Sheep.class.php';
$sheep = new Sheep();

$sheep->setColor('红色');
echo $sheep->getColor(); //羊的颜色是红色

echo "<br>";
$sheep1 = $sheep;//将sheep对象赋值给新的对象sheep1
$sheep1->setColor('灰色');
echo $sheep1->getColor();//羊的颜色是灰色

echo "<br>";
$sheep2 = clone $sheep;
$sheep2->setColor('蓝色');
echo $sheep2->getColor();
?>
</body>
</html>