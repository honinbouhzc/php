<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'Book.class.php';
$bookName = '《PHP范例》';
$book = new Book($bookName,85);
echo $book->getProperty();
echo '<br>';
echo $book->getInfo($bookName,85);
?>
</body>
</html>