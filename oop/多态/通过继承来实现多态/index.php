<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	require_once 'Animal.class.php';
	# 抽象类不能被实例化
	//$animal = new Animal();
	//echo $animal->walk();

	echo "<br>";

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