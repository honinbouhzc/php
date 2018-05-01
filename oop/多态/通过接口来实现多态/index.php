<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	require_once "Penguin.class.php";
	$penguin = new Penguin();
	echo $penguin->walk();

	echo "<br>";

	require_once 'Insect.class.php';
	$insect = new Insect();
	echo $insect->walk();

	?>
</body>
</html>