<?php 
$string = time()-$_COOKIE['times'];
echo '在线时间:'.date('H:i:s',$string).'秒！<br>';
echo '您的IP地址：'.getenv('REMOTE_ADDR').'<BR>';
echo '您的机器名称'.gethostbyaddr(getenv('REMOTE_ADDR'));

?>