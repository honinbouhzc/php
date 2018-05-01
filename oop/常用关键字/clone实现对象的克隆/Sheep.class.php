<?php 
class Sheep{
	private $color;
	public function setColor($color){
		$this->color = $color;
	}
	public function getColor(){
		return '羊的颜色是'.$this->color;
	}
}

?>