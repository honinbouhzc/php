<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<p>请输入要统计的内容</p>
<form action="" method="post">
	<input type="text" name="t1"><br>
	<input type="text" name="t2"><br>
	<input type="submit" name="sub" value="统计">
</form>
<?php 
require_once 'Stat.class.php';
$v1 = $_POST['t1'];
$v2 = $_POST['t2'];
$stat = new Stat();
echo "统计的结果为:".$stat->execStat($v1,$v2);
?>
</body>
</html>