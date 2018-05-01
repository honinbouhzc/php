<?php 
require_once 'StudentID.class.php';
require_once 'StudentName.class.php';

class Student implements StudentID,StudentName{ //定义学生类使其同时实现编号和姓名两个接口
	private $id;//定义编号属性
	private $name;//定义名称属性
	//实现接口中的各个方法
	public function setID($id){
		$this->id = $id;
	}
	public function getID(){
		return $this->id;
	}

	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
}

?>