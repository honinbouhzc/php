<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	Title:<input type="text" name="text">
	<input type="submit" name="sub">
</form>
<?php 
	$text = $_POST['text'];
	
	if(isset($_POST['sub'])) {
		echo "未去掉空格前的字符长度".strlen($text)."个字节";
		echo "<br>";
		echo "去掉空格后字符串长度".strlen(trim($text))."个字节";
	}
?>
</body>
</html>