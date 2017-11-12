<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	echo "<a style='font-size:20px; color:#000000'>被搜索的文本：</a>";
	$str = "PHP作为全球最普及、应用最广泛的互联网开发语言之一，从1994年诞生至今已被2000多万个动态网站采用，全球知名互联网公司Google、Yahoo、eBay和中国知名网站新浪、百度、阿里巴巴等均采用PHP技术！";
	echo $str."<hr>";
?>
<form action ="" method="post">
	关键字：<input type="text" name="text"><input type="submit" name="sub" value ="搜索">
</form>
<?php
	if (isset($_POST['sub'])) {
		$a = "<b style='color:red;font-size:18px;'>".$_POST['text']."</b>";
		echo str_replace($_POST['text'], $a, $str)."<br>";
		echo "关键字出现了".substr_count($str, $_POST['text'])."次";
	}
?>
</body>
</html>