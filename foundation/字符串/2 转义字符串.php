<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$str = "PHP数据库插入语句：INSERT INTO table(`id`,`name`)VALUES('1','YangMing')";  //声明一个变量

	echo "未经转义的字符串：".$str."<br>"; //没有转义
	echo "转移后的字符串：".addslashes($str); //转义后
?>
</body>
</html>