<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
$str = "id = 1"; //定义字符串
$str = urlencode($str);//对字符串进行编码
 ?>
 <a href="18%保护URL地址中传递的参数.php?<?php echo $str; ?>">对地址栏参数加密</a>
</body>
</html>