<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	用户名：<input type="text" name="username"><br>
	密  码：<input type="password" name="password"><br>
	<input type="submit" name="sub" value="提交">
</form>
<?php 
	if ($_POST['sub']) {
		$str = "0123456789";
		echo "异或加密：<hr>";
		echo "用户名：".$_POST['username']."<br>";
		echo "密  码:".($_POST['password']^$str); //异或加密
	}
?>
</body>
</html>