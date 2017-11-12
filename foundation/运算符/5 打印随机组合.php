<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<?php 
		//定义数组
		$arr1 = array('Happy Birthday!','Cheers','Best wishes');
		$arr2 = array('Good weekends',' Regards','Good luck');
		
		//定义随机数
		$rand = rand(0,2);
		
		echo $arr1[$rand].$arr2[$rand];
	?>
</body>
</html>