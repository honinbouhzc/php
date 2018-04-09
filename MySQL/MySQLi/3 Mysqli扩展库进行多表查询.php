<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		header('content-type:text/html;charser:utf-8');
		$mysqli =  new Mysqli('localhost','root','','db09');
		$mysqli->query('set names utf8');
		
		if ($mysqli->connect_error) {
			die('fail'.$mysqli->connect_error);
		}

		$sql = "select * from tb_student,tb_score where tb_student.id = tb_score.sid";

		$res = $mysqli->query($sql);

		//$row = $res->fetch_assoc();
		//var_dump($row);
	?>

	<table border="1">
		<tr>
			<th>学号</th>
			<th>姓名</th>
			<th>语文成绩</th>
			<th>数学成绩</th>
			<th>外语成绩</th>
		</tr>
		<?php //通过循环打印学生成绩
			while($row = $res->fetch_assoc()){
		?>			
				
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['sname']; ?></td>
			<td><?php echo $row['yw']; ?></td>
			<td><?php echo $row['sx']; ?></td>
			<td><?php echo $row['wy']; ?></td>
		</tr>
		<?php 
			}			
			$res->free();
			$mysqli->close();
		?>
	</table>
</body>
</html>