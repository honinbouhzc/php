<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	for ($a=1; $a < 10; $a++) { //1层循环
		if($a%2 == 0){ //如果为偶数回到本循环开始的位置
			continue ;
		} 
		for ($b=1; $b <= $a ; $b++) { //2层循环
			if($b%2 ==0){ //如果为偶数回到本循环开始的位置
				continue ;
			}
			echo "$a * $b =". $a*$b ."&nbsp&nbsp";
		}
		echo "<br>";
	}
//输出结果
// 1 * 1 =1  
// 3 * 1 =3  3 * 3 =9  
// 5 * 1 =5  5 * 3 =15  5 * 5 =25  
// 7 * 1 =7  7 * 3 =21  7 * 5 =35  7 * 7 =49  
// 9 * 1 =9  9 * 3 =27  9 * 5 =45  9 * 7 =63  9 * 9 =81  
?>
</body>
</html>