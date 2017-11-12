<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	Title:<input type="text" name="title">
	<input type="submit" name="sub" value="Submit">
</form>
<?php 
	$title = $_POST['title'];
	if (isset($_POST['sub'])) {
		echo "标题的长度为：".strlen($title)."个字节";
	}
?>
</body>
</html>