<?php 
class Student{
	private $id;
	private $name;
	private $age;
	private $address;

	public function __construct($id,$name,$age,$address){ //构造方法，对学生信息初始化
		$this->id = $id;
		$this->name = $name;
		$this->age = $age;
		$this->address = $address;
	}

	public function getId(){ //获得学生ID
		return $this->id;
	}

	public function getName(){//获得学生姓名
		return $this->name;
	}

	public function getAge(){//获得学生年龄
		return $this->age;
	}

	public function getAddress(){//获得学生地址
		return $this->address;
	}
}
?>