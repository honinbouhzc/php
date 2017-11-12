<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<p>自定义函数截取中文字符串我是被截取的部分</p>
<form method="post" action="">
	请输入开始截取的位置：<input type="number" name="text"><br>
	请输入截取结束的位置：<input type="number" name="text_1">
	<input type="submit" name="sub" value="截取"><br>
</form>

<?php 
function str(){  //自定义函数str();
	if($_POST['sub']){ //通过post方式传参
		$a = "自定义函数截取中文字符串我是被截取的部分";//定义字符串变量
		$res = substr($a, ($_POST['text']*2-2),($_POST['text_1']*2)); //截取字符串，开始位置为负数，则从右侧开始截取
		echo $res; //输出截取结果
	}
}
str(); //调用自定义的函数
?>
</body>
</html>