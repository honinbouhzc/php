<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<p>通过类对象调用类方法</p>
	<?php 
	require_once 'Student.class.php';
	$student = new Student(); //注意：使用new关键字对类进行实例化后将执行构造方法，直接使用类名调用类中的静态方法将不执行构造方法 
	echo $student->getSkills();
	?>

	<hr>
	<p>直接使用类名调用累的静态方法</p>
	<font color="red">学生可以：<?php echo Student::read(); ?>,<?php echo Student::study(); ?></font>

</body>
</html>