<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>运用PHP5新型字符串输出XML数据</title>
</head>

<body>
<?php 
$str=<<<mark
<?xml version="1.0" encoding="utf8"?>
<rss xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:taxo="http://purl.org/rss/1.0/modules/taxonomy/" version="2.0">
  <channel>
    <title>明日科技</title>
    <link>http://www.mingrisoft.com</link>
    <description>吉林省明日科技有限公司</description>
    <dc:creator>http://www.mingrisoft.com</dc:creator>
<item>
		<title>编程词典</title>
		<link>http://www.mrbccd.com</link>
		<description>明日科技编程词典重拳出击，隆重上市！</description>
		<pubDate>2008-08-08</pubDate>
		</item>
</channel></rss>
mark;
echo $str;
?>

</body>
</html>
