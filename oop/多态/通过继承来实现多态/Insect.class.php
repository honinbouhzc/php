<?php 
require_once 'Animal.class.php';
class Insect extends Animal{
	public function walk(){//重写父类中的walk（）方法
		return "昆虫可以爬行";
	}
}

?>