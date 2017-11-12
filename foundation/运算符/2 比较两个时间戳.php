<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<?php
	//strtotime()函数预期接受一个包含英文格式的时间字符串，并将其解析为UNIX时间戳
		date_default_timezone_set("Asia/ShangHai");//将格林尼治时间改为北京时间
		$a = strtotime("now"); //取得现在时间的时间戳
		$b = strtotime("05 May 2017"); //取得2017年5月5日的时间戳
		
		echo $a."\n";
		echo "Display date".date("Y-m-d H:i:s",$a)."<br><br>"; //取得以为$a时间点的时间
		
		echo $b."\n";
		echo "Display date".date("Y-m-d H:i:s",$b)."<br><br>"; //取得以为$b时间点的时间
	
	//ceil(float)函数返回一个不小于float的下一个整数值	
		$c = ceil(($a-$b)/(3600*24)); //计算相差天数
		echo "现在距离2017年5月5号已经过去了".$c."天";
	 ?>
</body>
</html>