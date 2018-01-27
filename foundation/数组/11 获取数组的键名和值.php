<?php 
$a = array("编程"=>"software","number"=>123,'value'=>true);

echo "键名为：";
foreach ($a as $key=>$value){
	echo $key."<br>";
}

echo "<hr>";

echo "输出值为：";
foreach ($a as $key => $value) {
	echo $key."=".$value."<br>";
}
?>