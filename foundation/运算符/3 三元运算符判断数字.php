<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php 
	//做小于10的数循环
	for($i = 0; $i < 10; $i++){
		//用三元运算输出，如果没有余数是偶数，有为奇数
		echo $i % 2 == 0 ? $i."是偶数."."<br>" : $i."是奇数."."<br>";
	}
?>
</body>
</html>