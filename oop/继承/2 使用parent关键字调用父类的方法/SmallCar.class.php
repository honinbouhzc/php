<?php 
require_once 'Car.class.php';

class SmallCar extends Car{
	public function smallCarRun(){
		return "小汽车可以".parent::run();
	}
}

?>