<?php

session_start();
define('IN_TG',true);
define('SCRIPT','login');
require dirname(__FILE__).'/include/common.inc.php';//dirname(__FILE__)=文件所在层的目录名
//登陆状态无法进行本操作

	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  

<?php 
	require ROOT_PATH.'/include/title.inc.php';
?>
<script type="text/javascript" src="js/code.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</head>  
<body>
<?php require ROOT_PATH.'include/header.inc.php'; ?>

<div id="help">
	<h2>用户咨询</h2>
	
		<span style="	font-size:15px;">有问题可通过此邮箱联系：</span>
		<span style="color:blue;font-size:20px;">545710896@qq.com</span>

</div>
<?php require ROOT_PATH.'include/footer.inc.php'; ?>
</body>  
</html>