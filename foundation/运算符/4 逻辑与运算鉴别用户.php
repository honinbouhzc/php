<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
    <form action="" method="post">
    	UserName: <input type="text" name="user"><br>
        PassWord: <input type="password" name="pass"><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php 
		if($_POST['submit']){ //通过POST方式提交
			//验证用户名和密码
			if($_POST['user'] == "mr" && $_POST['pass'] == 'craft'){
				echo "<script>alert('您是有管理权限的会员');</script>";
			}else{
				echo "<script>alert('您不是会员');</script>"	;
			}	
		}
	?>
</body>
</html>