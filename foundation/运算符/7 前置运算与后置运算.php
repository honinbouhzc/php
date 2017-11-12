<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$a = 0;
	echo "--------后置加运算-------<br>";
	for($b = 0;$b <= 10;$b++){
		echo $a++." ";
	}

	$c = 0;
	echo "<br>--------前置加运算-------<br>";
	for ($b=0; $b <=10 ; $b++) { 
		echo ++$c." ";
	}

	$d = 10;
	echo "<br>--------后置减运算-------<br>";
	for($b = 10;$b >=0;$b--){
		echo $d--." ";
	}

	$e = 10;
	echo "<br>--------前置减运算-------<br>";
	for($b = 10; $b>=0; $b--){
		echo --$e." ";
	}
?>
</body>
</html>