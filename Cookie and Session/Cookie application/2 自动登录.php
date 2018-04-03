<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<form action="2_1.php" method="post" name="form1">
	Username:<input type="text" name="user" value="<?php echo $_COOKIE['user']; ?>"><br>
	Password:<input type="password" name="pass" value="<?php echo $_COOKIE['pass']; ?>"><br>
	<input type="radio" value="3600" checked="checked" name="times">1hour
	<input name="times" type="radio" value="86400" >1day
	<input type="image" name="imageField" src="images/dl.gif">
	<input type="image" name="imageField2" src="images/cz.gif" onClick="form.reset();return false;">
</form>
</body>
</html>
