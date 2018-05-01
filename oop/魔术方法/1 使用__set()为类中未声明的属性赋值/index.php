<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Book.db.php';
foreach ($arrBook as $key => $aBook) {
	$book = new Book($aBook['name'],$aBook['page'],$aBook['author'],$aBook['price']);
	$book->bz = '备注'; //在面向对象编程过程中，在类体外可以直接为类中未定义的属性赋初值
	echo $book->getName().'||'.$book->getPage().'||'.$book->getAuthor().'||'.$book->getPrice().'||'.$book->getOther().'<br>';
}	

?>
</body>
</html>