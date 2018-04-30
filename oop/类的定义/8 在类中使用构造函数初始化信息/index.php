<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		table{
			text-align:center;
			background-color: #009933;
		}

		th{
			width: 100px;
			height: 22px;
			background-color: #009933;
			color:#fff;
		}
	</style>
</head>
<body>
<?php 
require_once 'studentArray.php';
require_once 'Student.class.php';
$count = count($students);
?>
<table cellspacing="0" cellpadding="0">
	<tr>
		<th>学号</th>
		<th>姓名</th>
		<th>年龄</th>
		<th>地址</th>
	</tr>
<?php 
for ($i=0; $i < $count; $i++) { 
	$stu = $students[$i];
	$student = new Student($stu[0],$stu[1],$stu[2],$stu[3]);
?>
	<tr>
		<td><?= $student->getId(); ?></td>
		<td><?= $student->getName(); ?></td>
		<td><?= $student->getAge(); ?></td>
		<td><?= $student->getAddress(); ?></td>
	
<?php 
}
?>
	</tr>
</table>
</body>
</html>