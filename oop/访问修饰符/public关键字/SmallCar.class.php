<?php 
require_once 'Car.class.php';

class SmallCar extends Car{
	public function smallCarRun(){ //定义小汽车的行驶方法
		return "小汽车".$this->run();
	}
}
?>