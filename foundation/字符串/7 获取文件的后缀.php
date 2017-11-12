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
	if(isset($_POST['sub'])){  //验证post传参是否存在
		$a = strrev($_POST['text']); //反转字符串
		//echo $a;
		$b = explode(".",$a); //以点号分割字符串
		$c = strrev($b[0]); //反转
		echo $c;
	}
?>
</body>
</html>