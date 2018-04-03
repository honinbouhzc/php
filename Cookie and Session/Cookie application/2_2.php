<?php 
	if($_COOKIE['name']==""){ //根据cookie的值判断浏览者是否具有访问权限
		echo "<script>alert('您不具有访问该页面的权限!');window.location.href='2 自动登录.php';</script>";
	}else{ //如果正确则输出内容
		echo "<script>alert('请继续操作);window.location.href='2 自动登录.php';</script>";
	}
?>