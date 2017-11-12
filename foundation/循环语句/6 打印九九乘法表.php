<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	for ($a=1; $a <= 9 ; $a++) { 
		for($b=1;$b<=$a; $b++){
			echo "$a * $b = ".$a*$b."&nbsp;&nbsp;&nbsp;" ;
		}
		echo "<br>";
	}
?>
</body>
</html>