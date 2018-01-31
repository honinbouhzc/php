<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 声明runTime()函数
通过microtime()获取当前时间的微秒数和时间戳；
应用explode()将microtime()函数返回的字符串进行分割，返回一个数组
包括两个元素，一个是当前时间的微秒数，一个是当前时间的时间戳
用list()将explode()函数的返回的数组赋值制定给变量
*/
function runTime(){
	list($msec,$sec) = explode(" ", microtime());
	return ((float)$msec + (float)$sec);
}
$start_time  =runTime();

$time_1 = strtotime(date('Y-m-d'));
$time_2 = strtotime(date('2018-7-15'));
$sub_2 = ceil(($time_2-$time_1)/86400);
echo "距今年的纪念日还有<b>".$sub_2."</b>天<br>";

$end_time = runTime();
echo "倒计时程序的运行时间为：".$end_time - $start_time."秒";
?>
</body>
</html>