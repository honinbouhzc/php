<?php 
require_once 'Car.class.php';
class SmallCar extends Car{
	public function __construct($repairTime){
		parent::__construct($repairTime); //调用父类构造方法对保修时间属性进行初始化
	}

	public function getSmallCarReqairTime(){
		return $this->repairTime; //调用父类的维修时间属性
	}
}

?>