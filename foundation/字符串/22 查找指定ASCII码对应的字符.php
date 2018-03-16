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
//chr(ascii)将ASCII码序数值转换成对应的字符
	if (isset($_POST['sub'])) {
		echo $_POST['text'].'的ASCII码为：';
		echo chr($_POST['text']);
	}
?>
</body>
</html>