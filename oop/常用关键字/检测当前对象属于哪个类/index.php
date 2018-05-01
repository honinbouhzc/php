<!DOCTYPE html>
<html> 
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Friut.class.php';//引入水果类

function getColor($obj){//定义根据对象类型获得相应的水果颜色的方法
	if ($obj instanceof Apple) {//判断是否为苹果实例对象
		$str = "苹果是:";
	}elseif ($obj instanceof Orange) {//判断是否为橙子实例对象
		$str = "橙子是:";
	}
	return $str.$obj->getColor();//打印结果
}

$apple = new Apple();
$orange = new Orange();

echo getColor($apple);
echo '<br>';
echo getColor($orange);

?>
</body>
</html>