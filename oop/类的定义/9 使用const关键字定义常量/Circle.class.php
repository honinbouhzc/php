<?php 
class Circle{
	const PI = 3.14;
	private $radius;

	public function __construct($radius){
		$this->radius = $radius;
	}

	public function getArea(){
		//pow()函数用于计算某个数的n次方幂,pow(要计算的数值，幂数)；
		return self::PI * pow($this->radius,2);
	}
}

?>