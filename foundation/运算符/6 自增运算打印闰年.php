<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php 
	
		for($i = 2000; $i< 2021; $i++){ //通过循环定义循环变量
			if($i%4 == 0){ //循环变量与4做求余运算
				echo $i . "<br>";
			}
		}
	
?>
</body>
</html>