<?php 
class Car{
	private $color;

	public function __construct($color){
		$this->color = $color;
	}

	public function getColor(){
		return $this->color; //返回汽车颜色
	}
}
?>