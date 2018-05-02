<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form>
	用户名：<input type="text" name="username"><br>
	密码：<input type="password" name="password"><br>
	<input type="submit" name="sub" value="确定">
</form>
<?php 
$username = $_POST['username'];
$password = $_POST['password'];
if (isset($_POST['sub'])) {
	require_once 'Db.class.php';
		$db = Db::getInstance();
		$arrayUser = $db->query("select id from tb_user where username ='".$username."'and password='".$password."'");
		if (count($arrayUser)>0) {
			$_SESSION['loginUsername'] = $username;
			echo '<script>window.location.href="success.php";</script>';
		}else{
			echo '<font color="red">用户名或者密码有误</font>';
		}
}

?>
</body>
</html>