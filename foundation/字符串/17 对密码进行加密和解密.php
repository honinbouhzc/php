<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form method="post" action="">
	用户名：<input type="text" name="username"><br>
	密  码：<input type="password" name="password"><br>
	<input type="submit" name="sub" value="提交">
</form>
<?php 
	if (isset($_POST['sub'])) {
		echo '经加密<hr>';
		echo '用户名：'.$_POST['username'];
		$str1 = base64_encode($_POST['password']);//加密
		echo '密  码:'.$str1.'<hr>';

		echo '经解密<hr>';
		echo '用户名：'.$_POST['username'];
		$str2 = base64_decode($str1);//解密
		echo '密  码:'.$str2.'<hr>';
	}
?>
</body>
</html>