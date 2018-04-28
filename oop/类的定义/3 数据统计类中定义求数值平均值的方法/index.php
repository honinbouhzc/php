<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<p>请输入一组数字，用逗号分开</p>
<form method="post" action="">
	<input type="text" name="cal">
	<input type="submit" name="sub" value="计算">
</form>

<?php
if (isset($_POST['sub'])) { 
	$num = $_POST['cal']; 
	if (isset($num)&&trim($num) != "" ) {
		require_once 'Stat.class.php';
		$arrNum = explode(",", $num); //explode（）用于实现将字符串用指定字符或子串分隔，并将分隔结果保存到数组中去
		$avg = Stat::getAvg($arrNum); //调用静态方法求平均值

		echo "该数组的平均值是：".$avg;
	}
}

?>
</body>
</html>