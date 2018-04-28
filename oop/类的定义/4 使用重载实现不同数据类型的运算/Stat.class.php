<?php 
require_once 'StatParent.class.php';

class Stat extends StatParent{

	public function execStat($var1,$var2){ //重写数据统计的方法
		if (is_numeric($var1)&&is_numeric($var2)) { //is_numeric()判断指定变量内容是否为数值型
		 	return intval($var1 + $var2);
		 }else{
		 	return $var1.$var2;
		 }

		// return is_numeric($var1)&&is_numeric($var2) ？ intval($var1 + $var2) ： $var1.$var2；也可以用三元表达式
	}

}
?>