<?php 
class Car{ //定义汽车类
	public $color; //定义颜色属性

	public function __construct($color){ //初始化颜色属性
		$this->color = $color;
	}

	public function stop(){ //定义了汽车刹车的方法
		return "汽车执行了刹车方法";
	}
}


?>