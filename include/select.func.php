<?php
global $pagesize,$pagenum;
//
function _select_a($pagenum,$pagesize){
	global $pagesize,$pagenum;
_page("SELECT t_id FROM t_pan_link WHERE t_title like '%杀毒%' or t_title like '%安全%'",15);
$result_a=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%杀毒%' or t_title like '%安全%' 
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
	return $result_a;
}
function _select_b($pagenum,$pagesize){
//	
	global $pagesize,$pagenum;
_page("SELECT t_id FROM t_pan_link WHERE t_title like '%设计%' or t_title like '%模型%' or t_title like '%标准%'",15);

$result_b=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%设计%' or t_title like '%模型%' or t_title like '%标准%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		
		");
return $result_b;
}
//
function _select_c($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link WHERE 
			t_title like '%DVD%' or t_title like '%dvd%' or t_title like '%cd%'  or t_title like '%CD%'
		or t_title like '%光盘%' ",15);
	
$result_c=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%DVD%' or t_title like '%dvd%' or t_title like '%cd%'  or t_title like '%CD%'
		or t_title like '%光盘%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_c;
}
//
function _select_d($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link 		WHERE t_title like '%Rar%' or t_title like '%RAR%' or t_title like '%rar%' or
		t_title like '%check%' or t_title like '%zip%' or t_title like '%Zip%' ",15);
$result_d=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%Rar%' or t_title like '%RAR%' or t_title like '%rar%' or
		t_title like '%check%' or t_title like '%zip%' or t_title like '%Zip%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_d;
}
//
function _select_e($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%壁纸%' or t_title like '%图标%' or t_title like '%主题%' or
		t_title like '%屏保%' or t_title like '%Icon%' or t_title like '%Theme%'",15);	
$result_e=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%壁纸%' or t_title like '%图标%' or t_title like '%主题%' or
		t_title like '%屏保%' or t_title like '%Icon%' or t_title like '%Theme%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_e;
}
function _select_f($pagenum,$pagesize){
//
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
					WHERE t_title like '%Tree%' or t_title like '%Dir%' or t_title like '%EF%' or
		t_title like '%文件%'",15);
$result_f=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%Tree%' or t_title like '%Dir%' or t_title like '%EF%' or
		t_title like '%文件%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_f;
}
//
function _select_g($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
		WHERE t_title like '%Firefox%' or t_title like '%Chrome%' or t_title like '%Prog%'
			",15);
	
$result_g=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%Firefox%' or t_title like '%Chrome%' or t_title like '%Prog%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_g;
}
//
function _select_h($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%IPOD%' or t_title like '%Copy%' or t_title like '%Trans%'or
		t_title like '%iPad%'",15);
$result_h=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%IPOD%' or t_title like '%Copy%' or t_title like '%Trans%'or
		t_title like '%iPad%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_h;
}
//
function _select_i($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%Phone%' or t_title like '%索尼%' or t_title like '%MIUI%'or
		t_title like '%诺基亚%'  or t_title like '%三星%'",15);
	
$result_i=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%Phone%' or t_title like '%索尼%' or t_title like '%MIUI%'or
		t_title like '%诺基亚%'  or t_title like '%三星%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_i;
}
//
function _select_j($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%photo%' or t_title like '%Ashampoo%' or t_title like '%转换器%'or
		t_title like '%Photo%'",15);
	
$result_j=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%photo%' or t_title like '%Ashampoo%' or t_title like '%转换器%'or
		t_title like '%Photo%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_j;
}
//
function _select_k($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%服务器%' or t_title like '%DNS%' or t_title like '%Network%'or
		t_title like '%TCP%'  or t_title like '%Server%' or t_title like '%通信%'",15);
	
$result_k=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%服务器%' or t_title like '%DNS%' or t_title like '%Network%'or
		t_title like '%TCP%'  or t_title like '%Server%' or t_title like '%通信%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_k;
}
//
function _select_l($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%办公%' or t_title like '%office%' or t_title like '%Word%'or
		t_title like '%Excel%'  or t_title like '%PPT%' or t_title like '%PDF%'",15);
	
$result_l=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%办公%' or t_title like '%office%' or t_title like '%Word%'or
		t_title like '%Excel%'  or t_title like '%PPT%' or t_title like '%PDF%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_l;
}
//
function _select_m($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%SQL%' or t_title like '%C语言%' or t_title like '%C++%'or
		t_title like '%java%'  or t_title like '%Apache%' or t_title like '%.NET%'",15);
	
$result_m=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%SQL%' or t_title like '%C语言%' or t_title like '%C++%'or
		t_title like '%java%'  or t_title like '%Apache%' or t_title like '%.NET%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_m;
}
//
function _select_n($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%科技%' or t_title like '%技术%' or t_title like '%Math%'or
		t_title like '%Map%'  or t_title like '%计数%'",15);
	
$result_n=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%科技%' or t_title like '%技术%' or t_title like '%Math%'or
		t_title like '%Map%'  or t_title like '%计数%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_n;
}
//
function _select_o($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%黑客%' or t_title like '%安全%' or t_title like '%Guard%'or
		t_title like '%解密%'  or t_title like '%Lock%' or t_title like '%密码%' or t_title like '%monitor%'
		or t_title like '%监视器%'",15);
	
$result_o=_query("SELECT t_id,t_title,t_link
		FROM t_pan_link
		WHERE t_title like '%黑客%' or t_title like '%安全%' or t_title like '%Guard%'or
		t_title like '%解密%'  or t_title like '%Lock%' or t_title like '%密码%' or t_title like '%monitor%'
		or t_title like '%监视器%'
		ORDER BY t_id
		LIMIT $pagenum,$pagesize
		");
return $result_o;
}
function _select_p($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%系统%' or t_title like '%文件%' or t_title like '%硬件%'or
			t_title like '%Window%'  or t_title like '%恢复%' or t_title like '%英特尔%'",15);
//
$result_p=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%系统%' or t_title like '%文件%' or t_title like '%硬件%'or
			t_title like '%Window%'  or t_title like '%恢复%' or t_title like '%英特尔%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
		");
return $result_p;
}
//
function _select_q($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%UNIX%' or t_title like '%Linus%' or t_title like '%ProFTPD%'or
			t_title like '%NAS%'  or t_title like '%XMMS%' or t_title like '%Fedora%'",15);
	
	$result_q=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%UNIX%' or t_title like '%Linus%' or t_title like '%ProFTPD%'or
			t_title like '%NAS%'  or t_title like '%XMMS%' or t_title like '%Fedora%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_q;
}
//
function _select_r($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%Window%' or t_title like '%界面%' or t_title like '%监视器%'or
			t_title like '%Audio%'  or t_title like '%驱动%' or t_title like '%桌面%'",15);
	
	$result_r=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%Window%' or t_title like '%界面%' or t_title like '%监视器%'or
			t_title like '%Audio%'  or t_title like '%驱动%' or t_title like '%桌面%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_r;
}
//
function _select_s($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%软件%' or t_title like '%文件%' or t_title like '%病毒%'or
			t_title like '%转换器%'  or t_title like '%枫叶%' or t_title like '%管理器%'",15);
	
	$result_s=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%软件%' or t_title like '%文件%' or t_title like '%病毒%'or
			t_title like '%转换器%'  or t_title like '%枫叶%' or t_title like '%管理器%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_s;
}
//
function _select_t($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%营销%' or t_title like '%广告%' or t_title like '%刷屏%'or
			t_title like '%浏览量%'  or t_title like '%IP%' or t_title like '%群发%'
			t_title like '%采集器%'  or t_title like '%SEO%' or t_title like '%发布%'
			t_title like '%轰炸%'  or t_title like '%批量%' or t_title like '%关键词%'
			or t_title like '%推广%'",15);
	
	$result_t=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%营销%' or t_title like '%广告%' or t_title like '%刷屏%'or
			t_title like '%浏览量%'  or t_title like '%IP%' or t_title like '%群发%'
			t_title like '%采集器%'  or t_title like '%SEO%' or t_title like '%发布%'
			t_title like '%轰炸%'  or t_title like '%批量%' or t_title like '%关键词%'
			or t_title like '%推广%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_t;
}
//
function _select_u($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%企业%' or t_title like '%名录%' or t_title like '%会员%'or
			t_title like '%信息%'  or t_title like '%采集%' or t_title like '%手机%'",15);
	
	$result_u=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%企业%' or t_title like '%名录%' or t_title like '%会员%'or
			t_title like '%信息%'  or t_title like '%采集%' or t_title like '%手机%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_u;
}
//
function _select_v($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%模版%' or t_title like '%源码%' or t_title like '%程序%'or
			t_title like '%网站%'  or t_title like '%后台%' or t_title like '%电商%'",15);
	
	$result_v=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%模版%' or t_title like '%源码%' or t_title like '%程序%'or
			t_title like '%网站%'  or t_title like '%后台%' or t_title like '%电商%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_v;
}
//
function _select_w($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%博客%' or t_title like '%新浪%' or t_title like '%微博%'or
			t_title like '%推广%'  or t_title like '%营销%' ",15);
	
	$result_w=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%博客%' or t_title like '%新浪%' or t_title like '%微博%'or
			t_title like '%推广%'  or t_title like '%营销%' 
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_w;
}
//
function _select_x($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%邮件%' or t_title like '%邮箱%' or t_title like '%采集%'",15);
	
	$result_x=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%邮件%' or t_title like '%邮箱%' or t_title like '%采集%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_x;
}
//
function _select_y($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%论坛%' or t_title like '%闲鱼%' or t_title like '%推广%'or
			t_title like '%群发%'  or t_title like '%点赞%' or t_title like '%发帖%'",15);
	
	$result_y=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%论坛%' or t_title like '%闲鱼%' or t_title like '%推广%'or
			t_title like '%群发%'  or t_title like '%点赞%' or t_title like '%发帖%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_y;
}
//
function _select_z($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%淘宝%' or t_title like '%店%' or t_title like '%旺旺%'",15);
	
	$result_z=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%淘宝%' or t_title like '%店%' or t_title like '%旺旺%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_z;
}
//
function _select_a_a($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%论坛%' or t_title like '%闲鱼%' or t_title like '%推广%'or
			t_title like '%群发%'  or t_title like '%点赞%' or t_title like '%发帖%'",15);
	
	$result_a_a=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%论坛%' or t_title like '%闲鱼%' or t_title like '%推广%'or
			t_title like '%群发%'  or t_title like '%点赞%' or t_title like '%发帖%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_a_a;
}
//
function _select_a_b($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%qq%' or t_title like '%QQ%' or t_title like '%空间%'",15);
	
	$result_a_b=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%qq%' or t_title like '%QQ%' or t_title like '%空间%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_a_b;
}
//
function _select_a_c($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%网赚%' or t_title like '%营销%' or t_title like '%推广%'or
			t_title like '%电子商务%' ",15);
	
	$result_a_c=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%网赚%' or t_title like '%营销%' or t_title like '%推广%'or
			t_title like '%电子商务%'  
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_a_c;
}
//
function _select_a_d($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%贴吧%' or t_title like '%百度%' ",15);
	
	$result_a_d=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%贴吧%' or t_title like '%百度%' 
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_a_d;
}
//
function _select_a_e($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%微信%' ",15);
	
	$result_a_e=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%微信%' 
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_a_e;
}
//
function _select_a_f($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%注册机%' or
		t_title like '%屏保%' or t_title like '%Icon%' or t_title like '%Theme%'",15);
	
	$result_a_f=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%注册机%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_a_f;
}
//
function _select_a_g($pagenum,$pagesize){
	global $pagesize,$pagenum;
	_page("SELECT t_id FROM t_pan_link
			WHERE t_title like '%注册机%''",15);
	
	$result_a_g=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%注册机%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	return $result_a_g;
}


//筛选主界面的title，及其id
function _select_b_a($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%论坛%'
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}
function _select_b_b($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%淘宝%'
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}
function _select_b_c($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%杀毒%'
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}
function _select_b_d($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%系统%'
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}
function _select_b_e($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%QQ%'
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}
function _select_b_f($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%营销%'
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}
function _select_b_g($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%企业%'
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}
function _select_b_h($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%博客%' or t_title like '%微博%'
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}function _select_b_i($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%邮件%' or t_title like '%邮箱%'
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}
function _select_b_j($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%网赚%'
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}
function _select_b_k($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%网络%'
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}
//用户好评排行
function _select_c_a($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%网络%' or t_title like'%注册机%'
						or t_title like'%系统%' 
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}
//本日最热门
function _select_c_b($num){
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%网赚%' or t_title like'%英雄联盟%'
			or t_title like'%QQ%'
			ORDER BY t_id
			LIMIT $num
			");
	return $result;
}
?>