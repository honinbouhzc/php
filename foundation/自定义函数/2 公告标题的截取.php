<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		table {
			border:1px solid #ccc;
			text-align: center;
			width: 274px;
			height: 251px;
			background-image: url('bg.jpg');
		}
	</style>
</head>
<body>
<?php
	 $array = array("南非世界杯开赛第十五天","南非世界杯正进行的如火如荼，头号种子队伍巴西骁勇善战，取得了良好成绩。");
?>
	<table cellspacing="0">
	  <tr><td width="268" align="center" >
	  <b style="font-family:'文鼎霹雳体'; font-size:18px; color:#0033CC"><?php echo $array[0];?></b><br>
	  <b style="font-family:'方正新报宋简体'; font-size:14px; color:#0033CC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $array[1];?></b><br>
	  <a href="2%20公告标题的截取.php?sub=获取" style="float:center">获取标题</a>
	  </td>
	</tr><tr><td align="center"><b style="color:#FF0000; font-family:'方正细圆繁体'">
<?php	
	function str($s){   //自定义函数
		$a = strlen($s); //取得字符串的长度
		$b = substr($s,0,$a);  //用substr函数截取字符串
		echo $b;  //输出
	}

	if ($_GET['sub'] == "获取") {  //通过get方式传参
		str($array[0]);  //自定义函数的调用

?>
</b></td></tr></table>
</body>
</html>