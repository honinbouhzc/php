<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	请输入苹果的颜色：<br>
	<input type="text" name="color"><br>
	请输入苹果的形状：<br>
	<input type="text" name="sharp"><br>
	<input type="submit" name="sub" value="确定">
</form>
<?php

$color = $_POST['color'];
$sharp = $_POST['sharp'];

if (isset($_POST['sub'])) {
	if (!empty($color) && !empty($sharp)) {
		require_once 'Apple.class.php';
		$apple = new Apple($color,$sharp);
		echo '苹果是'.$apple->getColor().'色'.$apple->getSharp().'的';
	}
}
?>
</body>
</html>