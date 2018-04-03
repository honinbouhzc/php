<?php 
if(!empty($_POST['user']) && !empty($_POST['pass'])){ //判断用户名或密码是否为空
	if($_POST['user'] == 'admin' && $_POST['pass'] == 123){
		setcookie('username',$_POST['user'],time()+$_POST['times']);//设置cookie的有效时间为1小时
		setcookie('password',$_POST['pass'],time()+$_POST['times']);
		echo "<script>alert('succeed!');window.location.href='2_2.php';</script>";
	}else{
		echo "<script>alert('false!');window.location.href='2 自动登录.php';</script>";
	}
}else{
	echo "<script>alert('Null!');window.location.href='2 自动登录.php';</script>";
}

?>