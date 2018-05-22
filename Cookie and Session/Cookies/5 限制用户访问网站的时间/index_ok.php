<?php 
$user = $_POST['user'];
$pass = $_POST['pass'];

if ($user == 'admin' && $pass = '123456') {
	header('Location:default.php');
	exit();
}else{
	header('Location:index.php');
	exit();
}

