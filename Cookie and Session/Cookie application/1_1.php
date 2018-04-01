<?php 
$user = $_POST['username'];
$pass = $_POST['password'];

if ($user == 'admin' && $pass == '123') {
	setcookie('user',$user,time()+60) or die('terminal cookie');
	setcookie('pass',$pass,time()+60) or die('terminal cookie');
	echo "<script>alert('登陆成功');window.location.href='1_ok.php';</script>";
}else{
	echo "<script>alert('用户名或者密码输入错误')；window.location.href = '1 控制用户登录的过期时间.php';</script>";
}

?>