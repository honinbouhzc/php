<?php 
class Car{ //定义一个汽车类
	private $colorFlag;//颜色标识
	private $typeFlag;//类型标识

	public function __construct($colorFlag,$typeFlag){ 
		$this->colorFlag = $colorFlag; //初始化颜色标识
		$this->typeFlag = $typeFlag; //初始化类型标识
	}

	public function getColor(){ //定义获得颜色的方法
		switch ($this->colorFlag) {//使用switch语句根据不同的颜色获得标识和颜色
			case 0:
				$color = '红色';
				break;

			case 1:
				$color = '白色';
				break;	
			
			case 2:
				$color = '黑色';
				break;
			default:
				$color = '宝石蓝';
				break;
		}
		return $color;
	}

	public function getType(){ //定义获得汽车类型的方法
		switch ($this->typeFlag) { //根据类型标识获得汽车类型
			case 0:
				$type = "奔驰";
				break;

			case 1:
				$type = "奥迪";
				break;
				
			case 2:
				$type = "宝马";
				break;		
			
			default:
				$type = "大众";
				break;
				
		}
		return $type;
	}

	public function getInfo(){ //定义一个方法获得汽车信息
		return "我的汽车是".$this->getColor().$this->getType();//调用类内的方法返回汽车信息
	}


}

?>