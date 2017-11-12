<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	请输入成绩：<input type="number" name="chengji" size="5">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="sub" value="评定">
</form>
<?php 
	$chengji = $_POST['chengji'];
	if (isset($_POST['sub'])) {
		if ($chengji == 100) {
			echo "成绩优秀";
		}elseif ($chenji >= 60 && $chengji <=99) {
			echo "成绩良好";
		}elseif ($chengji < 60) {
			echo "不及格";
		}else{
			echo "输入格式错误";
		}
	}
?>
</body>
</html>