<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
//定义数组
	$a = array("86年6月1日是张1的生日","86年6月2日是张2的生日","86年6月3日是张3的生日","86年6月4日是张4的生日","86年6月4日是张4的生日","86年6月5日是张5的生日","86年6月6日是张6的生日","86年6月7日是张7的生日","86年6月7日是张7的生日");
	// $b = 0;
	// while ($b < count($a)) {
	// 	echo $a[$b]."<br>";
	// 	$b++;
	// }

	for ($i=0; $i < count($a); $i++) { 
		echo $a[$i].'<br>';
	}
?>
</body>
</html>