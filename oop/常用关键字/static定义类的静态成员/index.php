<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>使用static关键字定义类的静态成员</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br />
<div
    style="width: 200px; padding: 3px; color: blue; clear: both; background-color: #E9F9C4; border: 1px solid #648B05; text-align: left; line-height: 30px;">
数值计算器：<br />
<form name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <input type="number" name="num1" class="input" size="20" /><br />
<select name="type">
    <option value="">运算类别</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select><br />
<input type="number" name="num2" class="input" size="20" /> 
<input type="submit" value="求值" /></form>
<?php
if (isset($_POST['num1']) && trim($_POST['num1']) != '') { //判断是否提交了表单
    require 'Math.class.php'; //包含Math.php文件
    $num1 = $_POST['num1'];  //获得提交的数字
    $num2 = $_POST['num2'];
    switch ($_POST['type']) { 
        case '+':   //进行加运算
            $result = Math::add($num1, $num2);
            break;
        case '-':  //进行减运算
            $result = Math::sub($num1, $num2);
            break;
        case '*': //进行乘运算
            $result = Math::multi($num1, $num2);
            break;
        case '/': //进行除运算
            $result = Math::div($num1, $num2);
            break;
    }
    echo '结果：' . $result;  //打印计算结果
}
?>
    </div>
</body>
</html>