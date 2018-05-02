<?php 
class Circle{
	private $radius;

	public function __construct($radius){
		$this->radius = $radius;
	}

	public function __toString(){
		return '圆的面积为：'.(string)number_format((pi()*pow($this->radius,2)),2);
	}
} 
?>