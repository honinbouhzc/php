<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$a = array("编程"=>"software","number"=>123,'value'=>true);

	echo current($a); //current(array);返回数组的当前单元,如果超出了单元列表的末端，返回false，如果数组包含空单元（0或者“”，空字符串）时也返回false
?>
</body>
</html>