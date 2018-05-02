<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Person.class.php';
$person = new Person('小明',23,'65kg');
isset($person->sex);//判断是否存在sex属性
echo '<br>';
echo $person->getName().'的年龄是'.$person->getAge().'岁，体重是'.$person->getWeight();
?>
</body>
</html>