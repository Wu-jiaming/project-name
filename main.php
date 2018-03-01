<?php 
session_start();
define('IN_TG',true);
define('SCRIPT','main');
require dirname(__FILE__).'/include/common.inc.php';
require dirname(__FILE__).'/include/select.func.php';

$result_b_a=_select_b_a(10);
$result_b_b=_select_b_b(10);
$result_b_c=_select_b_c(10);
$result_b_d=_select_b_d(10);
$result_b_e=_select_b_e(10);
$result_b_f=_select_b_f(10);
$result_b_g=_select_b_g(10);
$result_b_h=_select_b_h(10);
$result_b_i=_select_b_i(10);
$result_b_j=_select_b_j(10);
$result_b_k=_select_b_k(10);

//
$result_c_a=_select_c_a(9);
$result_c_b=_select_c_b(10);



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




<div id="main">

		
		<div class="left">
		<div class="title"><strong>用户好评排行</strong></div>
			<ul>
		<?php 
			while(!!$rows=_fetch_array_list($result_c_a)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];

				echo "<li><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";
			
			}
			
		?>

			</ul>
		</div>

		<div id="right_list_a">
		<div class="title">
		<strong class="active" id="b_t1" >论坛软件</strong>
		<strong class="normal" id="b_t2" >淘宝软件</strong>
		<strong class="normal" id="b_t3" >神器软件</strong>
		<strong class="normal" id="b_t4" >系统软件</strong>
		</div>
		<div class="tab_box">
		<ul id="b_1">
		<?php 
			while(!!$rows=_fetch_array_list($result_b_a)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];
				echo "<li><span class='globalDate'><em class='oldDate'> </em></span><i class='ClassName'><a href='list?keyword=论坛'>论坛软件</a></i><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";
			
			}
		?>
	</ul>
		<ul id="b_2">
		<?php 
			while(!!$rows=_fetch_array_list($result_b_b)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];
				echo "<li><span class='globalDate'><em class='oldDate'> </em></span><i class='ClassName'><a href='list?keyword=淘宝'>淘宝软件</a></i><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";
			
			}
		?>
		</ul>
		<ul id="b_3">
			<?php 
			while(!!$rows=_fetch_array_list($result_b_c)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];
				echo "<li><span class='globalDate'><em class='oldDate'> </em></span><i class='ClassName'><a href='list?keyword=注册机'>神器软件</a></i><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";
			
			}
		?>
		</ul>
		<ul id="b_4">		
<?php 
			while(!!$rows=_fetch_array_list($result_b_d)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];
				echo "<li><span class='globalDate'><em class='oldDate'> </em></span><i class='ClassName'><a href='list?keyword=系统'>系统软件</a></i><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";
			
			}
		?>		</ul>
		</div>
		</div>
		
<div class="right_list_b">
			<div class="title"><strong>QQ软件</strong></div>
			<ul>
	<?php 
			while(!!$rows=_fetch_array_list($result_b_e)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];
				echo "<li><span class='globalDate'><em class='oldDate'> </em></span><i class='ClassName'><a href='list?keyword=QQ'>QQ软件</a></i><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";
			
			}
		?>	
			</ul>
			</div>
			
			
	<div class="cear"></div>
<div class="left">
		<div class="title"><strong>本日热门排行</strong></div>
		<ul>
		<?php 
			while(!!$rows=_fetch_array_list($result_c_b)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];

				echo "<li><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";
			
			}
			
		?>	
		</ul>
</div>


<div id="right_list_a_2">
<div class="title">
<strong class="active" id="a_t1" onMouseOver="return swa_tab(1)">综合营销</strong>
<strong class="normal" id="a_t2" onMouseOver="return swa_tab(2)">企业名录</strong>
<strong class="normal" id="a_t3" onMouseOver="return swa_tab(3)">博客软件</strong>
<strong class="normal" id="a_t4" onMouseOver="return swa_tab(4)">邮件软件 </strong>
</div>
<div class="tab_box">
<ul id="a_1">
	<?php 
			while(!!$rows=_fetch_array_list($result_b_f)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];
				echo "<li><span class='globalDate'><em class='oldDate'> </em></span><i class='ClassName'><a href='list?keyword=营销'>综合营销</a></i><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";

			}
		?>	
</ul>
<ul id="a_2">
	<?php 
			while(!!$rows=_fetch_array_list($result_b_g)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];
				echo "<li><span class='globalDate'><em class='oldDate'> </em></span><i class='ClassName'><a href='list?keyword=企业'>企业名录</a></i><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";
			
			}
		?>	
</ul>
<ul id="a_3">
	<?php 
			while(!!$rows=_fetch_array_list($result_b_h)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];
				echo "<li><span class='globalDate'><em class='oldDate'> </em></span><i class='ClassName'><a href='list?keyword=微博'>博客软件</a></i><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";
			
			}
		?>	
</ul>
<ul id="a_4">
	<?php 
			while(!!$rows=_fetch_array_list($result_b_i)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];
				echo "<li><span class='globalDate'><em class='oldDate'> </em></span><i class='ClassName'><a href='list?keyword=邮件'>邮件软件</a></i><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";
			
			}
		?>	
</ul>
</div>
</div>


<div id="right_list_b_2">
		<div class="title">
		<strong class="active" id="tab_t1" onMouseOver="return swap_tab(1)">网赚视频</strong>
		<strong class="normal" id="tab_t2" onMouseOver="return swap_tab(2)">网络工具</strong></div>
		<div class="tab_box">
		<ul id="tab_1">	
			<?php 
			while(!!$rows=_fetch_array_list($result_b_j)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];
				echo "<li><span class='globalDate'><em class='oldDate'> </em></span><i class='ClassName'><a href='list?keyword=网赚'>网赚视频</a></i><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";
			
			}
		?>	
			</ul>
		<ul id="tab_2">	
			<?php 
			while(!!$rows=_fetch_array_list($result_b_k)){
				$html['id'] = $rows['t_id'];
				$html['title'] = $rows['t_title'];
				echo "<li><span class='globalDate'><em class='oldDate'> </em></span><i class='ClassName'><a href='list?keyword=网络'>网络工具</a></i><a href='soft_detail?id=".$html['id']."' target='_blank' title=".$html['title']."><b>".$html['title']."</b></a></li>";
			
			}
		?>	
			</ul>
		</div>
</div>






</div>
	




	<?php 
		require ROOT_PATH.'/include/footer.inc.php';
	?>
</body>  
</html> 