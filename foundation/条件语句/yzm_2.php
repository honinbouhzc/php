<?php
	header("Content-type:image/gif");					//设置页面格式
	$image = imagecreatetruecolor(40,20);					//生成画布
	$bg = imagecolorallocate($image,225,225,0);					//定义背景颜色
	$color = imagecolorallocate($image,255,0,255);			//定义图像颜色
	for($b = 0;$b <4; $b ++){							//生成随机验证码
		$a .= rand(1,9);
	}
	imagestring($image,3,8,5,$a,$color);				//输出验证码
	imagegif($image);									//生成图像
?>



