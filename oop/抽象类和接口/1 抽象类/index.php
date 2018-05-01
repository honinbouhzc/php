<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Food.class.php';
$material = 'flour';

require_once 'Bread.class.php';
$bread = new Bread($material);
echo '制作面包的材料是'.$bread->getMaterial();
?>
</body>
</html>