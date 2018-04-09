<?php 
header ( "Content-type: text/html; charset=utf-8" ); 

$user = $_POST['username'];
$pass = $_POST['password1'];
$pass_c = $_POST['password2'];
$email = $_POST['email'];
$address = $_POST['address'];
$sub = $_POST['sub'];

$mysqli = new Mysqli('localhost','root','','db09');
$mysqli->query('set names utf8');

if ($mysqli->connect_error) {
	die('connect failure'.$mysqli->connect_error);
}

if ($user != "" && $pass != "") {
	$check = "select name from tb_reg where name = '".$user."'";
	$result = $mysqli->query($check);
	if ($row = $result->fetch_row()) {
		echo "您输入的用户名已经存在，请更改用户名！";
	}else{
		$sql = "insert into tb_reg(name, pwd,email,address) value('".$user."','".$pass."','.".$email."','".$address."')";
		$res = $mysqli->query($sql);
		if ($mysqli->error) {
			die('fail'.$mysqli->error);
		}

		if ($res) {
			echo "成功";
		}else{
			echo "失败";
		}
	}
}

?>