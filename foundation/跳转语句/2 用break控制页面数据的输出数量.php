<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	for ($a=0; $a < 2; $a++) { 
		for ($b=0; $b < 2; $b++) { 
			for ($c=0; $c < 4; $c++) { 
				$rand = rand(1,4);
				echo "<img src='image/$rand.gif'>";
			}
		}
	}
?>

<hr>

<?php 
	for ($a=0; $a < 2; $a++) { 
		for ($b=0; $b < 2; $b++) { 
			for ($c=0; $c < 4; $c++) { 
				$rand = rand(1,4);
				if($rand != 2){
				echo "<img src='image/$rand.gif'>";
				}else{
					break 3;  //结束三个层级的循环
				}
			}
		}
	}
?>
</body>
</html>