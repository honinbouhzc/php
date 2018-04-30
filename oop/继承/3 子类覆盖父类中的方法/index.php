<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Apple.class.php';
$fruit = new Fruit();
echo $fruit->getColor();
echo "<br>";

$apple = new Apple('red');
echo $apple->getColor();
?>
</body>
</html>