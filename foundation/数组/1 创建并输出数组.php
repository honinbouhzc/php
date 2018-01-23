<!DOCTYPE html>
<html>
<head>
	<title>创建并输出数组</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="">
		<input type="text" value="书写字符串用#分割" onFocus="this.value=''" name="text">
		<input type="submit" name="sub1" value="创建数组">
		<input type="submit" name="sub2" value="输出数组">
	</form>
</body>
<?php 
	if ($_POST['sub1']) {
		if ($_POST['text']=="") {
			echo "<script>alert('您创建了一个空数组')；location.href='1.php'</script>";
		}else{
			$_SESSION['array'] = $_POST['text'];
			echo "<script>alert('您创建数组成功')；location.href='1.php'</script>";
		}
	}

	if ($_POST['sub2']) {
		if (isset($_SESSION['text'])) {
			$array = explode('#',$_SESSION['array']);
			print_r($array);
			session_destroy();
		}else{
			echo "<script>alert('请先穿件一个数组')；location.href='1.php'</script>";
		}
	}
?>
</html>
