<?php 
class Student{
	public function __construct(){
		echo "这种方式能调用构造方法";
	}

	public static function study(){
		return "学习";
	}

	public static function read(){
		return "读书";
	}

	public function getSkills(){
		return "学生可以：".self::study().','.self::read();
	}

}


?>