<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 

$a  = ['tom','drew','phillip','aaron'];
for($i=0;$i<count($a);$i++){
	print_r(list($name,$value) = each($a));
}

//输出结果
//Array ( [1] => tom [value] => tom [0] => 0 [key] => 0 ) Array ( [1] => drew [value] => drew [0] => 1 [key] => 1 ) Array ( [1] => phillip [value] => phillip [0] => 2 [key] => 2 ) Array ( [1] => aaron [value] => aaron [0] => 3 [key] => 3 )
	
?>
</body>
</html>