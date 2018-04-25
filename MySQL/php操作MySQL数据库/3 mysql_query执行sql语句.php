<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="post">
		<textarea name="sqlQuery" cols="25" rows="5"></textarea><br>
		<input type="submit" name="sub">
	</form>

	<?php 
	$mysqli = new Mysqli('localhost','root','','db09');
	if ($mysqli->connect_error) {
		die('连接数据库错误'.$mysqli->connect_error);
	}
	$mysqli->query('set names utf8');

	$sqlQuery = $_POST['sqlQuery'];
	$sql = substr($sqlQuery, 0,6);

	switch (strtoupper($sql)) {
		case 'SELECT':
			echo "您在执行查询操作";
			break;

		case 'INSERT';
			echo '您在执行插入操作';
			break;

		case 'UPDATE';
			echo '您在执行更新操作';
			break;

		case 'DELETE';
			echo '您在执行删除操作';
			break;			
		
		default:
			echo '您输入的sql语句有误，请检查';
			break;
	}
	?>
</body>
</html>