<?php 
define('IN_TG',true);
define('SCRIPT','list');

require dirname(__FILE__).'/include/common.inc.php';

require dirname(__FILE__).'/include/select.func.php';
global $pagesize,$pagenum;

 if($_GET['navigation'] == 'a'){
	$result = _select_a($pagenum,$pagesize);
	
}elseif ($_GET['navigation'] == 'b'){
	$result = _select_b($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'c'){
	$result = _select_c($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'd'){
	$result = _select_d($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'e'){
	$result = _select_e($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'f'){
	$result = _select_f($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'g'){
	$result = _select_g($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'h'){
	$result = _select_h($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'i'){
	$result = _select_i($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'j'){
	$result = _select_j($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'k'){
	$result = _select_k($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'l'){
	$result = _select_l($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'm'){
	$result = _select_m($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'o'){
	$result = _select_o($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'p'){
	$result = _select_p($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'q'){
	$result = _select_q($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'r'){
	$result = _select_r($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 's'){
	$result = _select_s($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 't'){
	$result = _select_t($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'u'){
	$result = _select_u($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'v'){
	$result = _select_v($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'w'){
	$result = _select_w($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'x'){
	$result = _select_x($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'y'){
	$result = _select_y($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'z'){
	$result = _select_z($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'a_a'){
	$result = _select_h($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'a_b'){
	$result = _select_i($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'a_c'){
	$result = _select_j($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'a_d'){
	$result = _select_z($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'a_e'){
	$result = _select_h($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'a_f'){
	$result = _select_i($pagenum,$pagesize);
}elseif ($_GET['navigation'] == 'a_g'){
	$result = _select_j($pagenum,$pagesize);
}    
//通过搜索过来
if($_GET['action'] == 'search'){

	_page("SELECT t_id FROM t_pan_link WHERE t_title like '%{$_POST['search']}%'",15);
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%{$_POST['search']}%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");
	
}
//通过点击热门搜索
if($_GET['keyword']){

	_page("SELECT t_id FROM t_pan_link WHERE t_title like '%{$_GET['keyword']}%'",15);
	$result=_query("SELECT t_id,t_title,t_link
			FROM t_pan_link
			WHERE t_title like '%{$_GET['keyword']}%'
			ORDER BY t_id
			LIMIT $pagenum,$pagesize
			");

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  

<?php
//把标题，basic.css,main.css
require ROOT_PATH.'/include/title.inc.php';

?>  
<script>

</script>
<script type="text/javascript" src="js/main.js"></script>
</head>  
<body>


<?php 
require ROOT_PATH.'include/header.inc.php';
require ROOT_PATH.'include/navigation.inc.php';
?>

<?php 

$html=array();
while(!!$rows=_fetch_array_list($result)){
	$html['id'] = $rows['t_id'];
	$html['title'] = $rows['t_title'];

	echo '<br>';
	echo '<a href=soft_detail.php?id='.$html['id'].'>'.$html['title'].'</a><br>';

	
}
	_free_result($result);
?>
	<?php _type(2);?>
<?php 
require ROOT_PATH.'include/footer.inc.php';
?>
</body>
</html>