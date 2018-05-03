<?php 
abstract class Browser{
	abstract function getType();
}

class Ie extends Browser{
	public function getType(){
		return 'IE';
	}
}

class Fox extends Browser{
	public function getType(){
		return 'Firefox';
	}
}


?>