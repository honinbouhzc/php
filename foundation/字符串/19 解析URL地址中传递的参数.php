<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$str1 = "id+1";
	$str1 = urlencode($str1);
	$str2 = urldecode($str1);
?>

<a href="19%解析URL地址中传递的参数.php?<?php echo $str1; ?>">对地址栏参数加密</a>
<a href="19%解析URL地址中传递的参数.php?<?php echo $str2; ?>">对地址栏参数解析</a>
</body>
</html>