<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	//完成对时区的设置
	date_default_timezone_set("PRC");
	
	echo '系统的当前时间是'. date('Y-m-s H:i:s');
?>
</body>
</html>