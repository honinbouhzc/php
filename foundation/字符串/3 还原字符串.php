<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$str = "PHP数据库插入语句：INSERT INTO table(`id`,`name`)VALUES(\'1\',\'YangMing\')";

	echo "未经还原的字符串：".$str."<br>";
	echo "还原后的字符串：".stripslashes($str);
?>
</body>
</html>