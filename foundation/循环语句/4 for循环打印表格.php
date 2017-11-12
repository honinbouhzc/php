<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		table {
			border:1px red solid;
		}
	</style>
</head>
<body>
<?php 	
	for($a = 0; $a<5; $a++){
		for($i = 0; $i<8 ;$i++){
			echo $i.'&nbsp;&nbsp;&nbsp;';
		}
		echo "<br>";
	}
?>

<hr>

<?php 
for($a = 0; $a<5; $a++){
echo "<table>";
echo "<tr>";
	for($i = 0; $i<8 ;$i++){
			echo "<td>".$i."</td>";
		}
echo "</tr>";
echo "</table>";		
}
?>
</table>
</body>
</html>