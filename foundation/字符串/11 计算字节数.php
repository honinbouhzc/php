<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
 function unhtml($content){
 	$content = htmlspecialchars($content);
 	$content = str_replace(chr(13), "<br>", $content);
 	$content = str_replace(chr(32), "&nbsp;", $content);
 	return trim($content);
 }
 $str = "标题：PHP编程宝典<br>内容：PHP编程宝典非常好！";
?>
<table border="1" bordercolor="#FF0000" cellspacing="0">
	<tr><td>
	<?php echo $str;?>
	</td></tr>
</table>
<?php 
	echo "共有字节".strlen(unhtml($str))."个";
?>
</body>
</html>