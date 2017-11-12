<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
//定义数组
	$a = array('John'=>"05/05",
				'Tom'=>"10/10",
				'Jason'=>'18/09');

//foreach语句循环数组
	foreach ($a as $key => $value) {
		//条件比较
		if (date('d/m') == $value) {
			//输出结果
			echo "Today is ".$key . '\'s&nbsp;Birthday';
		}
	}	
?>
</body>
</html>