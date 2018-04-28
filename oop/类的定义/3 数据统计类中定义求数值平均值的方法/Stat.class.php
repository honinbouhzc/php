<?php 
class Stat{
	public static function getAvg($arrNum){ //定义一个静态方法来求平均值
		$totalNum = count($arrNum);//获得字数的总数
		if ($totalNum == 0) {//如果数字为0，则返回null
			return null;
		}else{
			$sum = 0;//用变量sum来保存所有数字的和
			for ($i=0; $i <$totalNum ; $i++) { //通过循环来计算所有数字的和
				$sum += $arrNum[$i];
			}
		}

		return $sum/$totalNum ;//求平均值
	}
}

//静态方法隶属于某个类，但不受这个类的控制，可以被外部直接访问

?>