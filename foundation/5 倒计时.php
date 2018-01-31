<?php 
echo "当前时间：".date("Y-m-d H:i:s");
$time_1 = time();
$time_2 = strtotime('15 July 2012');
$time_3 = ceil((($time_1 - $time_2)/(3600*24)));
echo "<br>距纪念日还有<b color='red'>".$time_3."</b>天";

?>