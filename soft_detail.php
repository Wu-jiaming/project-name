<?php 
define('IN_TG',true);
define('SCRIPT','list');
require dirname(__FILE__).'/include/common.inc.php';

if($_GET['id']){
	if(!!$rows = _fetch_array("select * from t_pan_link 
													where t_id='{$_GET['id']}'")){
		$html['title'] = $rows['t_title'];
		$html['id'] = $rows['t_id'];
		
	}
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

</head>  
<body>
<?php 
require ROOT_PATH.'include/header.inc.php';
require ROOT_PATH.'include/navigation.inc.php';
?>

<div id="main" >
<br/>
	<h1><?php echo $html['title']?></h1>

	
	<h2><a href="soft_down?id=<?php echo $html['id']?> " name="soft_down" title="<?php echo $html['title']?>">获取下载链接</a></h2>
	
</div>


<?php 
require ROOT_PATH.'include/footer.inc.php';
?>
</body>
</html>