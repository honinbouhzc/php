<?php 
header('content-type:text/html;charset=utf-8'); //定义页面编码
require_once 'Browser.class.php';
function getBrowserType(){//定义获得浏览器类型的方法
	if (strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) {//判断是否为IE浏览器
		$b = new Ie();//实例化Ie类
	}else{
		$b = new Fox();//实例化FOx类
	}
	return $b->getType();//返回浏览器的类型
}

echo '当前使用的浏览器是'.getBrowserType();//执行getBrowserType方法
?>