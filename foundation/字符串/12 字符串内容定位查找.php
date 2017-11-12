<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<p>吉林省明日科技有限公司是一家以计算机软件技术为核心的高科技型企业</p>
<form action ="" method="post">
	<input type="text" name="te" value="请输入查找的内容" onFocus="this.value=''" size="15"><input type="submit" name="sub" value="定位查找">
</form>
<?php
if (isset($_POST['sub'])) {
	$email = '吉林省明日科技有限公司是一家以计算机软件技术为核心的高科技型企业';
	$str = $_POST['te'];
	$str1 = "<b style='color:red;'>".$str."</b>";
	echo str_replace($str,$str1,$email)."<br>";
	echo "查找内容从<b style='color:red;'>".strpos($email,$str)."</b>字节开始，字符串长度为<b style='color:red;'>".strlen($str)."</b>个字节";
}
 ?>
</body>
</html>