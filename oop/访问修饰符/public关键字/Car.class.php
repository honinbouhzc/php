<?php 
class Car{
	public function run(){ //定义行驶方式
		return "行驶";
	}

	public function getStatus(){ //定义返回汽车的状态方法
		return "汽车目前正在".$this->run();
	}
}
?>