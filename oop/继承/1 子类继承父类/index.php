<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form method="post" action="">
	请输入苹果的颜色：<input type="text" name="color"><br>
	请输入苹果的形状：<input type="text" name="shape"><br>
	<input type="submit" name="sub" value="提交">
</form>
<?php 
$color = $_POST['color'];
$shape = $_POST['shape'];
$sub = $_POST['sub'];
require_once 'Apple.class.php';
if (isset($sub)) {
	$apple = new Apple($color,$shape);
	echo "<font color='blue'>我看见的苹果是".$apple->getColor()."色的".$apple->getShape()."形的";
}
?>
</body>
</html>