<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		div {
			width: 200px;
			height: 200px;
		}
	</style>
</head>
<body>
<?php 
	for($a=0;$a<10;$a++){
		if($a<=5){
			$rand = dechex(rand(0,15));  //取得16进制数
		}else{
			continue; // 不满足条件，重新执行循环
		}
	}
?>
<div bgcolor="#<?php echo $rand; ?>"></div>  
</body>
</html>