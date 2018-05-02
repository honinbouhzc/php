<?php 
class Car{
	private $brand;
	private $color;

	public function __construct($brand,$color){
		$this->brand = $brand;
		$this->color = $color;
	}

	public function __unset($name){
		echo '在'.__CLASS__.'类中没定义'.$name.'属性';
	}
}

?>