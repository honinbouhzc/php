<?php 
$username = $_POST['username'];
$password = $_POST['password'];
//$sub = $_POST['sub'];

if (isset($username) && isset($password)) {
	if ($username == 'admin' && $password == '123456') {
		setcookie('username',$username,time()+30);
		setcookie('password',$password,time()+30);
		echo '登录成功';
		header('Location:cookie.php');
		exit();
	}else{
		echo '您输入的用户名或者密码不正确';
		header('Location:index.php');
	}
}else{
	echo '请输入完整信息';
}



?>