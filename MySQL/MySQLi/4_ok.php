<?php 
header ( "Content-type: text/html; charset=UTF-8" ); 

$user = $_POST['username'];
$pass = $_POST['password'];
$sub = $_POST['sub'];

$mysqli = new Mysqli('localhost','root','','db09');
$mysqli->query('set names utf8');
if ($mysqli->connect_error) {
		die("连接失败".$mysqli->connect_error);
	}

if ($user != "" && $pass != "") {
	$sql = "select * from tb_login where username='".$user."' and password='".$pass."'";
	$res = $mysqli->query($sql);
	$row = $res->fetch_row(); 
	if ($row) {
		echo "登录成功";
	}else{
		echo "登录失败";
	}
	
} else{
	echo "请输入完整的用户名和密码";
}

//$res->free();
	$mysqli->close();

?>