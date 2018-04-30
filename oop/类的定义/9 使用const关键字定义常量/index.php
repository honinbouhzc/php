<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>计算圆面积：</h1>
<form action="" method="post">
	请输入圆的面积：<input type="number" name="radius">
	<input type="submit" name="sub" value="计算">
</form>
<?php 

$radius = $_POST['radius'];
$sub = $_POST['sub'];
if (isset($radius)) {
	require_once 'Circle.class.php';
	$circle = new Circle($radius);
	echo "该圆的面积为：".$circle->getArea();
}

?>
</body>
</html>