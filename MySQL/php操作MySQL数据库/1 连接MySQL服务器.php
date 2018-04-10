<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>连接MySQL服务器</h1>
<form action="" method="post">
	host:<input type="text" name="host">
	root:<input type="text" name="root">
	pwd:<input type="text" name="pwd">
	dbname:<input type="text" name="dbname">
	<input type="submit" name="sub" value="确定">
</form>
<?php
	header ( "Content-type: text/html; charset=utf-8" ); 
	$host = $_POST['host'];
	$root = $_POST['root'];
	$pwd = $_POST['pwd'];
	$dbname = $_POST['dbname'];
	$sub = $_POST['sub'];

	if ($host = "" || $root ="" || $dbname ="" ) {
		echo "请填写完整信息！";
	}else{
		$mysqli = new Mysqli($host,$root,$pwd,$dbname);
		if ($mysqli->connect_error) {
			die("connection failure!".$mysqli->connect_error);
		}else{
			echo "连接MySQL服务器的".$dbname."成功，请继续操作！";
		}
	}
?>
</body>
</html>