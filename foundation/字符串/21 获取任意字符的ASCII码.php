<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	<input type="text" name="text">
	<input type="submit" name="sub" value="转换">
</form>
<?php
//ord(string);将字符转换成ASCII码，并返回一个整数值
	if (isset($_POST['sub'])) {
		echo $_POST['text']."的ASCII码为：";
		echo ord($_POST['text']);
	}
 ?>
</body>
</html>