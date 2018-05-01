<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	请输入学生编号：<input type="number" name="num"><br>
	请输入学生姓名：<input type="text" name="name"><br>
	<input type="submit" name="sub" value="提交">
</form>
<?php 
require_once 'Student.class.php';
$num = $_POST['num'];
$name = $_POST['name'];
if (isset($_POST['sub'])) { //判断是否提交表单
	if (isset($num) && isset($name)) {//判断信息是否完整
		$student  = new Student();//实例化一个学生类
		$student->setID($num);//设定学生学号
		$student->setName($name);//设定学生姓名
		echo "当前学生的编号是：".$student->getID()."&nbsp;姓名是：".$student->getName();//打印学生信息
	}else{
		echo "请输入完整信息";
	}
}
?>
</body>
</html>