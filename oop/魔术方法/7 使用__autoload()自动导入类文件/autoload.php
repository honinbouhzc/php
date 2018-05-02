<?php 
function __autoload($className){//定义__autoload()方法
	$file = dirname(__FILE__).'/class/'.$className.'.php';//包含文件的路径
	if(!file_exists($file)){ //判断文件是否存在
		return false;//不存在就返回false
	}else{
		require_once $file;//存在就包含该文件
	}
}

?>