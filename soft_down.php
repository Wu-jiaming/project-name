<?php
session_start();
define('IN_TG',true);
define('SCRIPT','soft_down');

require dirname(__FILE__).'/include/common.inc.php';

if (!isset($_COOKIE['username'])) {
	_location('请先登录！','login');
}elseif(!!$rows=_fetch_array("select t_level,t_id from t_user 
					where t_username='{$_COOKIE['username']}'")){
	if($rows['t_level'] != 1 or $rows['t_level'] !=2){
		_location('你需要进一步升级账号才能下载！', 'upgrade.php?id='.$rows['t_id']);
	}
	
}
else{
	
	if(!!$rows=_fetch_array("select * from t_user where t_username ='{$_COOKIE['username']}' ")){
		$html['chance']=$rows['t_download_chance'];
		if (isset($_GET['id'])) {
			if (!!$_rows = _fetch_array("SELECT t_title,t_id,t_link FROM
					t_pan_link WHERE t_id='{$_GET['id']}' LIMIT 1")) {
					$_html = array();
					$_html['title'] = $_rows['t_title'];
			}
		}
		
	}

	if($html['chance'] == ''){
		#没有对应记录，构建并记录更新用户记录
		$dtStr = date('Ymd')."|1";
		_query("UPDATE t_user SET t_download_chance='{$dtStr}' 
									WHERE t_username='{$_COOKIE['username']}'");
		
			}else{
						#有记录，开始拆分判断并且进行计算处理
						$tmp = explode('|', $html['chance']);
						#判断记录日期是否是今天，是则返回剩余次数，不是则返回系统限制上限
						$today = date('Ymd');
						if($today == $tmp[0]){
									
									#判断总下载次数
									if((int)$tmp[1] >=  5){
										#超限，不予下载
										//_alert_close('无法下载');
										_alert_close("你不能下载软件！你今日的下载上限 5次已满！");
										
										}else{
											
											// echo $id;
											// print_r($arr);
											// print_r($newArr);
											// //echo $a = implode(',', $newArr);
											$chance=(int)$tmp[1];
											$chance=$chance+1;
											$dtNew = date('Ymd')."|".$chance;
											#未超限，更新下载id记录
											_query("UPDATE t_user SET t_download_chance='{$dtNew}' 
																		WHERE t_username='{$_COOKIE['username']}'");
										}
								
						}else{
							//echo 7;
							#不是今天，那么构建
							$dtStr = date('Ymd')."|1";
							_query("UPDATE t_user SET t_download_chance='{$dtStr}' 
													WHERE t_username='{$_COOKIE['username']}'") ;
				
						}
		}
}
//获取数据
if (isset($_GET['id'])) {
		if (!!$_rows = _fetch_array("SELECT t_title,t_id,t_link FROM 
																t_pan_link WHERE t_id='{$_GET['id']}' LIMIT 1")) {

			$_html['id'] = $_rows['t_id'];
			$_html['link'] = $_rows['t_link'];
			
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
<script type="text/javascript" src="js/code.js"></script>
<script type="text/javascript" src="js/soft_down.js"></script>
</head>
<body>


<div id="soft_down">
	<h1><?php echo $_html['title']?></h1>

<h2>今天还有<?php echo 4-$tmp[1]?>次下载机会</h2>
		<h3><a href="<?php echo $_html['link']?>">下载链接</a></h3>


</div>


<?php echo $today;?>
</body>
</html>