<?php 
header ( "Content-type: text/html; charset=utf-8" ); 

$user = $_POST['username'];
$pass = $_POST['password'];
$sub = $_POST['sub'];

$mysqli = new Mysqli('localhost','root','','db09');
$mysqli->query("set names utf8");

if ($mysqli->connect_error) {
	die('connection failure'.$mysqli->connect_error);
}

if ($user != "" && $pass != "") {
	$check = "select * from tb_login where username = '".$user ."'and password = '".$pass."'";
	$result = $mysqli->query($check);

	if ($row = $result->fetch_row()) {
		$_SESSION['user'] = $user;
		echo "登录成功";
		echo "<script>window.location.href='6_2.php'</script>";
	}else{
		echo "登录失败";
	}

}

?>