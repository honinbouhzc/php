<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
$a = array("编程"=>"software","number"=>123,'value'=>true, 1=>"we");
echo "原数组：";
print_r($a);
echo "<br>";

$b = array_chunk($a,2);
echo "新数组：";
print_r($b)."<br>";
?>
</body>
</html>