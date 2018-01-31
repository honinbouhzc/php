<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	<input type="submit" name="sub" value="时间比较">	
</form>
<?php 
	if ($_POST['sub']) {
		$time = date('Y-m-d');
		$current_time = time();
		$solid_time = strtotime("15 July 2012");

		if ($solid_time > $current_time) {
			echo $time."比纪念日小";
		}else{
			echo $time."比纪念日大";
		}
		
	}
?>
</body>
</html>