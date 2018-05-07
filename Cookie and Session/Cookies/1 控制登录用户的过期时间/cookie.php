<?php
$user = $_COOKIE['username'];
$pass = $_COOKIE['password']; 
if ($user =='admin'&& $pass=='123456') {
	echo '欢迎光临！';
}else{
	echo "用户名或者密码不正确";
	header('Location:index.php');
	exit();
}


?>