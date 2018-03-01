<?php
session_start();
define('IN_TG',true);
define('SCRIPT','active');
require dirname(__FILE__).'/include/common.inc.php';
if (!isset($_GET['id'])) {
	_alert_back('非法操作');
}
else{
	$id=$_GET['id'];

}

if($_GET['getcode'] == 1){
	if(!!$rows=_fetch_array("select * from t_user where t_id='{$id}'")){
		$exptime = time()+60*60*24;
		if($id){
			require dirname(__FILE__).'/include/smtp.class.php';
			$smtpserver = "smtp.163.com"; //SMTP服务器
			$smtpserverport = 25; //SMTP服务器端口
			$smtpusermail = "ndjfhrhge@163.com"; //SMTP服务器的用户邮箱
			$smtpuser = "ndjfhrhge@163.com"; //SMTP服务器的用户帐号
			$smtppass = "1wujiaming"; //SMTP服务器的用户密码
			$smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
			$emailtype = "HTML"; //信件类型，文本:text；网页：HTML
			$smtpemailto = $rows['t_email'];
			$smtpemailfrom = $smtpusermail;
			$emailsubject = "用户帐号激活";
			$active_code = _active_code();
			//$emailbody = '123';
			//$emailbody = "亲爱的".$clean['username']."：<br/>感谢您在我站注册了新帐号。<br/>请点击链接激活您的帐号。<br/><a href='http://localhost:8080/tourism_management/active.php?action=".$clean['active']."'>http://localhost:8080/tourism_management/active.php?action=".$clean['active']."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。<br/>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>-------- Hellwoeba.com 敬上</p>";
			$emailbody = "亲爱的".$rows['t_username']."：<br/>感谢您在我站注册了新帐号。<br/>请用激活码激活您的帐号。<br/>".$_SESSION['active_code']."<br/>该激活码24小时内有效。<br/>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>-------- 旅游管理系统 敬上</p>";
	
			$rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype);
			if($rs==1){
				$msg = '恭喜您，注册成功！<br/>请登录到您的邮箱及时激活您的帐号！';
			}else{
				$msg = $rs;
	
			}
		} else {
			$msg = '服务器忙，请稍后再试';
		
		}
	
		_close();
		_session_destroy();
		
		echo $msg;
		_location( $msg, 'active.php?id='.$id);
	}
}


if (($_GET['action']=='active') && ($_GET['id']==$id)) 
{
	if(_active_code($_SESSION['active_code'],$_POST['active_code'])){
	
				_query("UPDATE t_user SET t_status = 1 WHERE t_id='{$_GET['id']}' LIMIT 1");
				if (_affect_rows() == 1)
				{
					_close();
					_location('账户激活成功','login.php');
				} else
					{
						_close();
						_location('账户激活失败','register.php');
					}
		
	}else{
		_alert_back('激活码错误');	
	}
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  

<?php 
	require ROOT_PATH.'/include/title.inc.php';
?>
</head>  
<body>


<?php require ROOT_PATH.'include/header.inc.php'; ?>
<div id="active">
	<h2>激活账户</h2>
	<p></p>
	<form method="post" name="avtive" action="active.php?action=active&id=<?php echo $id?>">
		<dl>
			<dd>请输入激活码：<input type="text" name="active_code" class="text"/></dd>
			
			
			
			<dd><input type="submit" class="submit" value="提交"/></dd>
	</dl>
			<a  id="getcode" href="javascript:;" title="<?php echo $id?>" >获取验证码</a>
			
	
		
	</form>
	
</div>

<?php require ROOT_PATH.'include/footer.inc.php'; ?>
<script type="text/javascript" src="js/active.js"></script	>
</body>  
</html> 