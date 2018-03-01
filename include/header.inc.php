<?php
if(!defined('IN_TG'))
{
	exit('Access Defined!');
}
?>
<script type="text/javascript" src="Js/skin.js"></script>
<div id ="header">
		<h1><a href="main.php">神器下载基地</a></h1>
			<ul>
				<li ><a href="main.php">首页</a></li>
				<?php 
					if(isset($_COOKIE['username'])){
						echo '<li><a href ="member.php">'.$_COOKIE['username'].'-个人中心</a>'.$GLOBALS['message'].'</li>';
						echo "\n";
					}else{
						echo '<li><a href="register.php">注册</a></li>';
						echo "\n";
						echo "\t\t";
						echo '<li><a href="login.php">登录</a></li>';
						echo "\n";
					}

				?>
				
				<li><a href ="help.php">帮助</a></li>
					<?php 
				if (isset($_COOKIE['username']) && isset($_SESSION['admin'])){
					echo '<li><a href="manage.php" class="manage"> 管理	 </a></li>';
				}
				if(isset($_COOKIE['username'])){
					echo '<li><a href ="logout.php">退出</a></li>';
					echo "\n";
				}
				
				?>
				
	
				
			</ul>	
	</div>