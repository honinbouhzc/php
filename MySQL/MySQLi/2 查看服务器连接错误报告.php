<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
 $mysqli = new Mysqli("localhost",'root','');
 echo $mysqli->connect_error; //打印错误提示
 echo "<hr>";
 echo $mysqli->connect_errno; //打印错误号
?>
</body>
</html>