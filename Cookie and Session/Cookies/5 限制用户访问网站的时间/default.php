<?php 
session_start();//初始化session
$session_id = session_id();//获取session_id
setcookie('start',$session_id,time()+20);//定义cookie变量并设置其有效时间为20秒
$starts = $_COOKIE['start'];
if (isset($starts) || $starts == $session_id) {
	echo '您可以访问该页面';
}else{
	echo '<font color="red">您访问该页面的时间到了</font>';
}
?>