<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post"> 
	输入一个金额：<input type="number" name="num" size="15">
	<input type="submit" name="sub" value="格式化">
</form>
<?php
//number_format(number)返回参数number的格式化数字，该函数可以有1个，2个和4个参数，但是不能是3个。
//如果有一个参数，返回值会格式化小数点后面的数，且以千分位逗号隔开；有两个参数，会格式化到小数点的第几位，会以千分位逗号隔开；
	if (isset($_POST['sub'])) {
		echo number_format($_POST['num'],2);
	}
 ?>
</body>
</html>