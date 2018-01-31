<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	<input type="submit" name="sub_1" value="开始答题">&nbsp;<input type="submit" name="sub_2" value="结束答题">
</form>
<?php 
		if ($_POST['sub_1']) {
			$time_1 = time();
			$_SESSION['start'] = $time_1;
			echo "开始答题";
		}

		if ($_POST['sub_2']) {
			if ($_SESSION['start']) {
				$duration = time() - $_SESSION['start'];
				echo "您用时".$duration."秒答题";
				session_destroy();
			}else{
				echo "您还没有答题，无法结束，请先答题！";
			}
		}
?>
</body>
</html>