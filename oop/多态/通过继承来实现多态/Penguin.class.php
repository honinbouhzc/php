<?php 
require_once 'Animal.class.php';
class Penguin extends Animal{
	public function walk(){//重写父类中的walk（）方法
		return "企鹅可以直立行走";
	}
}
?>