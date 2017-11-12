<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			font-size: 16px;
			color: #009;
			font-family:'微软雅黑';
			background-image: url('bg1.jpg');
		}
	</style>
</head>
<body>
		<form action="" method="post">
			<b style="float:left">内容：</b><textarea cols="15" rows="2" name="te"></textarea>
			<input type="submit" name="sub" value="提交">
		</form>
	</body>
</html>
<?php
	function str($str){  //自定义函数
		$array = array('图书','明日科技','软件','编程词典','编程','词典'); //创建关键词数组
		$repstr = implode($array); //将数组转化成字符串
		if(preg_match("/$str/",$repstr)){ //使用正则表达式验证
			echo "<script>alert('您使用了禁用词语，请重新填写');location.href='4%20字符串的过滤.php'</script>";
		}else{
			echo "内容为：".$str;  //输出数据
	}
	if($_POST["sub"]){
		str($_POST["te"]);  //调用自定义数组
	}
?>
</body>
</html>