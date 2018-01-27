<?php 
$a = array("编程"=>"software","number"=>123,'value'=>true);

if(array_key_exists("number",$a)){
	echo "数组中存在此元素";
} else{
	echo "数组中不存在此元素";
}

//bool array_key_exists("number",$a);检测给定数组的键名或者索引是否存在，为真时返回值为true；
?>
