<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	数据库名：<input type="text" name="db_name">
	数据表名：<input type="text" name="tb_name">
	<input type="submit" name="sub" value="查看">
</form>
<?php 
header ( "Content-type: text/html; charset=utf-8" ); 
$dbname = $_POST['db_name'];
$tbname = $_POST['tb_name'];
$sub = $_POST['sub'];

if (isset($sub)) {
	//选出要连接的数据库
	$mysqli = new Mysqli('localhost','root','',$dbname);
	$mysqli->query("set names utf8");

	if($mysqli->connect_error){
		die("connection failure".$mysqli->connect_error);
	}

	$sql = "select * from $tbname ";
	$res = $mysqli->query($sql);

	//返回总的行列数，注意num_rows和field_count是成员属性不是成员方法
	echo "该表共有字段".$res->num_rows."行&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;";
	echo "该表共有记录".$res->field_count."段";

	echo "<table border='1'><tr>";
		//提出表头信息
		while ($field=$res->fetch_field()) {
			echo "<th>{$field->name}</th>";
		}
		echo "</tr>";
		//循环取出数据
		while ($row=$res->fetch_row()) {
				echo "<tr>";
				foreach ($row as $value) {
				echo "<td>$value</td>";	
				}
				echo "</tr>";
			}

	echo "</table>";
	//释放内存，断开连接
	$res->free();
	$mysqli->close();	

}
?>
</body>
</html>