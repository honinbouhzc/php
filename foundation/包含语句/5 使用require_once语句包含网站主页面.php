<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		table{
			text-align: center;
			border:1px #ccc;
		}
	</style>
</head>
<body>
<table  bordercolorlight="#FFFFFF"><tr><td>
<img src="image/header.jpg" width="519" border="0" usemap="#Map">
<map name="Map"><area shape="rect" coords="98,68,157,103" href="5%20使用require_once语句包含网站主页面.php?link=主页"><area shape="rect" coords="221,67,281,104" href="5%20使用require_once语句包含网站主页面.php?link=注册"><area shape="rect" coords="352,68,409,103" href="5%20使用require_once语句包含网站主页面.php?link=浏览"></map></td>
</tr>
<tr><td><table><tr><td><img src="image/sidebar.jpg"></td><td>
<?php
	$link = isset($_GET['link']) ? $_GET['link'] : "";
	switch ($link) {
		case "主页":
			require_once('welcome.php');
			break;
		case "注册":
			require_once('login.php');
			break;	
		case "浏览":
			require_once('message.php');
			break;
		default:
			require_once('welcome.php');
			break;
	}
?>
</td>
</tr></table></td></tr>
</table>

</body>
</html>