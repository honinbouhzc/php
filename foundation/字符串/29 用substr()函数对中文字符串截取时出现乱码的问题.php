<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body style="font-size:16px; color:blue; font-family:'微软雅黑'"> 
<p>吉林省明日科技有限公司是一家以计算机软件技术为核心的高科技型企业</p>
<form action ="" method="post">
	从第<input type="text" name="te" size="5">字开始截取，截取<input type="text" name ="tx" size="5">个字。<input type="submit" name="sub" value="截取">
</form>

<?php
function msubstr($str, $start, $len) { 		//$str指的是字符串,$start指的是字符串的起始位置，$len指的是长度。
	$strlen = $start + $len; 				//用$strlen存储字符串的总长度（从字符串的起始位置到字符串的总长度）
	for($i = 0; $i < $strlen; $i ++) { 			//通过for循环语句,循环读取字符串
		if (ord ( substr ( $str, $i, 1 ) ) > 0xa0) { 	//如果字符串中首个字节的ASCII序数值大于0xa0,则表示为汉字
			$tmpstr .= substr ( $str, $i, 2 ); 	//每次取出两位字符赋给变量$tmpstr，即等于一个汉字
			$i ++; //变量自加1
		} else { 					//如果不是汉字，则每次取出一位字符赋给变量$tmpstr
			$tmpstr .= substr ( $str, $i, 1 );
		}	
	return $tmpstr; 					//输出字符串
	}
}
$string="吉林省明日科技有限公司是一家以计算机软件技术为核心的高科技型企业";
$str=msubstr($string,$_POST['te'],$_POST['tx']);
echo $str;
?>

</body>
</html>