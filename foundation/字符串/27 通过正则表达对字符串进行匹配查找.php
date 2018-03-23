<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	关键字：<input type="text" name="search">
	<input type="submit" name="sub" value="查找">
	<?php
		$a = array('microsoft','明日mr科技','www.software.com'); //定义数组
		foreach ($a as $key => $value) { //循环遍历数组
			$a = $_POST['search'];
			if (preg_match("/$a/", $value)) { //正则表达式匹配
				echo $value;
				echo "<br>";
			}
		}
	?>
</form>
</body>
</html>