<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	<input type="text" name="text" value="请输入循环次数"size="20" onFocus="this.value=''">
	<input type="submit" name="sub1" value="执行">
</form>

<?php 
	if ($_POST['sub1']) { //通过POST方式传递函数
		for($a = 0; $a<20 ; $a++){ //循环
			if($a >= $_POST['text']){ //接受文本框信息的判断条件
				break; //结束循环
			}else{ //否则循环输出
				echo "已经输出了".($a+1)."次循环<br>";
			}
		}
	}
?>
</body>
</html>