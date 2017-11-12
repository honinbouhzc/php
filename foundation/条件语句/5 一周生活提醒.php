<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$a = date('l'); //取得当前是星期几
	switch ($a) {
		case 'Monday':
			echo "今天星期一，一周的忙碌生活开始了";
			break;
		
		case 'Tuesday':
			echo "今天星期二，上午可以看到美足夜赛的转播";
			break;

		case 'Wednesday':
			echo "今天星期三，一周的排名统计和新的战力榜出炉了";
			break;	

		case 'Thursday':
			echo "今天星期四，新一轮的比赛要开始了，查看一下对阵和伤病名单吧";
			break;	

		case 'Friday':
			echo "今天星期五，新一轮首场夜赛上午开始了";
			break;	

		case 'Saturday':
			echo "今天星期六，大学生联盟比赛开始了";
			break;	

		case 'Sunday':
			echo "今天星期日，准备好看红区了吗";
			break;	
	}
?>
</body>
</html>