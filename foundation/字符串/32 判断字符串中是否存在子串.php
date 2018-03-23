<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php	
$a = "Hello World";  //定义字符串
echo $a;  //输出字符串
echo "<form action='' method='post'>"; //输出表单
echo "<input type='text' name='text' value='输入文本内容''>";	
echo "<input type='submit' name='sub' value='提交''>";
echo "</form>";

if (isset($_POST['sub'])) {    //通过post方式传参
		if (stristr($a, $_POST['text']!="")) { //判断是否存在子串
			echo "<script>alert('文本存在指定子串');</script>"; //提示
		}else{
			echo "<script>alert('文本不存在指定子串');</script>"; //提示
		}
	}	
?>
</body>
</html>