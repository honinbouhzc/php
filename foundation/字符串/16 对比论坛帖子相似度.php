<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>比较帖子的相似度</h1>
<form action="" method="post">
	字符串1：<input type="text" name="str1"><br>
	字符串2：<input type="text" name="str2"><br>
	<input type="submit" name="comp" value="比较">
</form>
<?php 
//similar_text(first, second)返回两个字符串相同字符的个数
	if (isset($_POST['comp'])) {
		$a = similar_text($_POST['str1'], $_POST['str2']);
		if (strlen($_POST['str1'])>= strlen($_POST['str2'])) {
			echo "字符串1与字符串2有".$a."个字符相同，相似度为".($a/strlen($_POST['str1'])*100)."%";
		}else{
			echo "字符串1与字符串2有".$a."个字符相同，相似度为".($a/strlen($_POST['str2'])*100)."%";
		}
	}
?>
</body>
</html>