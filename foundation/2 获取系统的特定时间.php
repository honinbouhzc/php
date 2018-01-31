<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		echo "当前时间为：".date("Y-m-d H:i:s");
		echo "<br>";
		echo "本月有：".date('t')."天<br>";
		echo "今天是本周的第".date("w")."天<br>";
		echo "是一年的第".date('z')."天";
	?>
</body>
</html>