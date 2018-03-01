<?php
session_start();
define('IN_TG',true);
define('SCRIPT','upgrade');

require dirname(__FILE__).'/include/common.inc.php';

if (!isset($_COOKIE['username'])) {
	_location('请先登录！','login');
}

//获取数据
if (isset($_GET['id'])) {
		if (!!$_rows = _fetch_array("SELECT t_id FROM 
																t_user WHERE t_id='{$_GET['id']}' LIMIT 1")) {

			$_html['id'] = $_rows['t_id'];
			
			
		} else {
			_alert_close('不存在此用户！');
		}
} else {
	_alert_close('非法操作！');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>神器__获取下载链接</title>
<?php 
	require ROOT_PATH.'/include/title.inc.php';

?>
<script type="text/javascript" src="js/soft_down.js"></script>
</head>
<body>
<?php require ROOT_PATH.'include/header.inc.php'; ?>

<div id="upgrade">
	<h2>用户升级中心</h2>
	
	<ul>
		<li>升级永久普通会员：￥xx</li>
		<li>升级永久高级会员：￥xx</li>
	</ul>
	<div class="pay">
		<h3>微信支付</h3>
				
		<img src="thumb.php?filename=pay/wechat.png&percent=0.5" alt="微信支付" />
	</div>	
	<div class="pay">
		<h3>支付宝支付</h3>
				
		<img src="thumb.php?filename=pay/alipay.jpg&percent=0.5" alt="支付宝支付" />
	</div>
	<p class="tips">支付30分钟后，还没成功升级，请及时联系管理员：	545710896@qq.com</p>
	<p class="tips">谢谢配合！</p>

</div>


<?php echo $today;?>
</body>
</html>