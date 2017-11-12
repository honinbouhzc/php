<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	Username:<input type="text" name="username"><br>
	Password:<input type="password" name="password"><br>
	<input type="submit" name="sub"><input type="reset"><br>
</form>
<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(isset($_POST['sub'])){
		if($username == 'abc' && $password == '1q2w3e'){
			echo "您是高级会员";
		}else{
			echo "您不是会员";
		}
	}
?>
</body>
</html>