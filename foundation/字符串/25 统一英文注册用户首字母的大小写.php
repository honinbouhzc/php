<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	用户名：<input type="text" name="username">
	<input type="submit" name="sub" value="提交">
</form>
<?php 
if (isset($_POST['sub'])) {
	$username = $_POST['username'];
	echo "首字母统一为大写：".ucfirst($username); //转换单词首字母
}
?>
</body>
</html>