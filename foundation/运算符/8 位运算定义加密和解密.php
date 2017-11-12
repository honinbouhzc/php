<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form method="post" action="">
	数字口令：<input type="number" name="number">
	<input type="submit" name="submit" value="确定">
</form>

<?php 
	define('PI', 3.1415926535);
	function encrypt($str){
		return $str = $str << PI;
	}
	function decrypt($str){
		return $str = $str >> PI;
	}

	$numbe = $_POST['number'];
	if($numbe){
		echo "加密口令&nbsp;&nbsp;".encrypt($numbe).'<br>';
		$_SESSION['pwd'] = encrypt($numbe);
	}
?>

<a href="8%20位运算定义加密和解密.php?pwd=1">揭秘口令</a>
<?php 
	if(isset($_GET['pwd'])){
		echo "揭秘口令是&nbsp;".decrypt($_SESSION['pwd'])."<br>";
	}
?>
</body>
</html>