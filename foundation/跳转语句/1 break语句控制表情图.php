<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<body>
<form action="" method="get">
	<input name="check" type="radio" value="1" checked="checked">微笑
	<input name="check" type="radio" value="2">嘲笑
	<input name="check" type="radio" value="3">生气
	<input name="check" type="radio" value="4">喜欢
	<input type="submit" name="sub" value="确定">
</form>


<?php 
//break 关键字是结束循环语句的执行
// for($i = 0 ; $i <=4 ; $i++){
// 	echo $i."<br>";
//  if($i == 2){
//  	break;  当$i=2 时不在继续循环,只打印0，1，2
//  }
// }

if ($_GET['sub']) {
	switch ($_GET['check']) {
		case '1':
			echo "<img src='image/1.gif'>";
			break;
		case '2':
			echo "<img src='image/2.gif'>";
			break;
		case '3':
			echo "<img src='image/3.gif'>";
			break;
		case '4':
			echo "<img src='image/4.gif'>";
			break;		
	}
}


?>
</body>
</html>