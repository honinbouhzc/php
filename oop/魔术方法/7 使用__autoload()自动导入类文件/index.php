<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'autoload.php';
$apple = new Apple();
$orange = new Orange();

echo $apple->getCOlor();
echo '<br>';
echo $orange->getColor();
?>
</body>
</html>