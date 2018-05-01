<?php 
class Math{
	public function add($num1,$num2){
		return $num1 + $num2;
	}

	public function sub($num1,$num2){
		return $num1 - $num2;
	}

	public function multi($num1,$num2){
		return $num1 * $num2;
	}

	public function div($num1,$num2){
		try{
			if (num2 == 0) {
				throw new Exception("除数不能为0");	
			}else{
				return $num1 / $num2;
			}
		}catch(Exception $e){
			return $e->getMessage();
		}
		
	}

}


?>