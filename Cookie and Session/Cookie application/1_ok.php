<?php
if ($_COOKIE['user'] == 'admin' && $_COOKIE['pass'] == '123') {
	echo "欢迎光临";
} else{
	echo "<script>alert('cookie 登录过期，请重新登录');window.location.href = ‘1_1.php’;</script>";
}




 ?>