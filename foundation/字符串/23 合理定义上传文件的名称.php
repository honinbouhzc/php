<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="830" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><img src="images/bg_01.jpg" width="830" height="133" /></td>
  </tr>
   <form action="" method="post" enctype="multipart/form-data">
  <tr>
    <td width="193" rowspan="4">&nbsp;</td>
    <td width="423" height="50">选择上传文件
 	  <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" /> 
      <input type="file" name="up_picture"/> 
    </td>
    <td width="214" rowspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="center"><span class="STYLE1">上传图片大小为(2M)</span></td>
  </tr>
  <tr>
    <td height="50" align="center"><input type="image" name="imageField2" src="images/bg_09.jpg" />      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="image" name="imageField3" src="images/bg_11.jpg" /></td></tr>
    </form>
  <tr>
    <td height="70">
<?php
if(!empty($_FILES[up_picture][name])){		//判断上传文件是否为空
	if($_FILES['up_picture']['error']>0){		//判断文件是否能上传到服务器
		echo "上传错误";
		switch($_FILES['up_picture']['error']){
			case 1:
				echo "上传文件大小超出配置文件规定值";
			break;
			case 2:
				echo "上传文件大小超出表单中的约定值";
			break;
			case 3:
				echo "上传文件不全";
			break;
			case 4:
				echo "没有上传文件";
			break;	
		}
	}else{
		if(!is_dir("./upfile/")){				//判断指定目录是否存在
			mkdir("./upfile/");					//创建目录
		}
		$path='./upfile/'.rand().time().strstr($_FILES['up_picture']['name'],".");		//定义文件名称和存储位置
		if(is_uploaded_file($_FILES['up_picture']['tmp_name'])){	//是不是HTTP POST上传
			if(!move_uploaded_file($_FILES['up_picture']['tmp_name'],$path)){	//执行上传
				echo "上传失败";
			}else{
				echo "文件".time().$_FILES['up_picture']['name']."上传成功，大小为.".$_FILES['up_picture']['size'];	
			}
		}else{
			echo "上传文件".$_FILES['up_pictute']['name']."不合法";
		}
	}
}
?></td>
  </tr>
  <tr>
    <td colspan="3"><img src="images/bg_14.jpg" width="830" height="30" /></td>
  </tr>
</table>
</body>
</html>