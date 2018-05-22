<?php 
$user = $_POST['user'];
$pass = $_POST['pass'];

if ($user == 'admin' && $pass = '123456') {
	echo '登录成功';
	$str = time();
	setcookie('times',$str);
	header('Location:default.php');
	exit();
}else{
	header('Location:index.php');
	exit();
}




?>