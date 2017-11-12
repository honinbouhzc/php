<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$b = "截取论坛标题"; //设定字符串
	$a = "<title>$b</title>";//设定网页标题
	echo $a;
	echo "本论坛的标题是：".$b."<br>"; 
	$c = substr($b,0,12); //截取论坛标题
	echo "截取的字符串：".$c;
	//截取中英文字符串是容易产生乱码，建议对中文字符串截取时应用md_substr()函数;
?>
</body>
</html>