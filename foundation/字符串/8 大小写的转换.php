<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action ="" method="post">
		关键字：<input type="file" name="text"><input type="submit" name="sub" value ="上传">
	</form>
	<?php 
		if (isset($_POST['sub'])) {
			$text = $_POST['text'];
			$a = strtolower($text);
			echo $a."<br>";
			$b = strtoupper($text);
			echo $b;
		}
	?>
</body>
</html>