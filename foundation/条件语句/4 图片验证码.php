<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			font-size: 16px;
			color: #009;
			font-family:'微软雅黑'; 
			background-image: url('image/1.jpg');
		}

		table {
			width: 166px;
			border:1px #ccc;
			text-align:center;
		}
	</style>
</head>
<body>
		<table bordercolorlight="#FFFFFF">
		  <tr><td width="156" height="139">
			<img src="image/1.jpg" hspace="4" border="0" usemap="#Map"><br>
			<form action ="" method = "">
				验证码:<input name ="text" type ="text" size="8" >
				<?php
					switch($_GET['link']){			
						case "文字";
				?>
						<img src="yzm_1.php"> <!--引入图片-->
				<?php
						break;
						case "数字";
				?>
						<img src="yzm_2.php">
				<?php
						break;
						default:
				?>
						<img src="yzm_2.php">
				<?php
					}
				?>
			</form>

			</td></tr></table>
	
<map name="Map"><area shape="rect" coords="14,47,54,67" href="4 图片验证码.php?link=文字"><area shape="rect" coords="91,45,132,66" href="4 图片验证码.php?link=数字"></map></body>
</html>
