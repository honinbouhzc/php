<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$array = array("PHP典型模块","PHP开发实战宝典","JAVA开发实战宝典","PHP网络编程自学手册");
?>

<form action="" method="post">
	<textarea name="te" cols="20" rows="6">0、<?php echo $array[0]?>     1、<?php echo $array[1]?>                 2、<?php echo $array[2]?>                  3、<?php echo $array[3]?>
	</textarea><br>
	<input type="text" name="text" value="输入要跳过记录的编号"size="20" onFocus="this.value=''">
	<input type="submit" name="sub1" value="跳过">
</form>
<?php 
if($_POST['sub1']){
	for($a = 0; $a<count($array);$a++){
		if($a == $_POST['sub1']){
			continue ;
		}else{
			echo $array[$a].'<br>';
		}
	}
}
?>
</body>
</html>