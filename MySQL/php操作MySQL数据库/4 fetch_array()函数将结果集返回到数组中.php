<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$mysqli = new Mysqli('localhost','root','','db09');
	if ($mysqli->connect_error) {
		die('连接数据库错误'.$mysqli->connect_errors);
	}
	$mysqli->query('set names utf8');
	$sql = 'select * from tb_student';
	$res = $mysqli->query($sql);

	echo "<table border='1'>";
	echo '<tr><th>id</th><th>sno</th><th>sname</th></tr>';
	while ($rows = $res->fetch_array()) {
		// echo '<pre>';
		// var_dump($rows);
		// echo '</pre>';
		echo '<tr>';
		echo "<td>$rows[0]</td><td>$rows[1]</td><td>$rows[2]</td>";
		echo "</tr>";
	}


	echo '</table>';
?>
</body>
</html>