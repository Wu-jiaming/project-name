<?php
//判断下载次数是否达到当日上限
if($cfg_ml->M_Rank > $needRank && $needMoney > 0){
	if(isset($GLOBALS['cfg_dlimit']) && $GLOBALS['cfg_dlimit'] > 0 ){
		$dtSql = "SELECT `dtime` FROM `#@__member` WHERE `mid`='{$cfg_ml->M_ID}'";
		$dt = $dsql->GetOne($dtSql);
		if($dt['dtime'] == ''){
			#没有对应记录，构建并记录更新用户记录
			$dtStr = date('Ymd')."|".$id;
			$updtsql = "UPDATE `#@__member` SET `dtime`='{$dtStr}' WHERE `mid`='{$cfg_ml->M_ID}'";
			$dsql->ExecuteNoneQuery($updtsql);
		}else{
			#有记录，开始拆分判断并且进行计算处理
			$tmp = explode('|', $dt['dtime']);
			#判断记录日期是否是今天，是则返回剩余次数，不是则返回系统限制上限
			$today = date('Ymd');
			if($today == $tmp[0]){
				$arr = explode('##',$tmp[1]);
				#判断当前id是否包含在内
				if(!in_array($id, $arr)){
					#判断总下载次数
					if(count($arr) >=  $GLOBALS['cfg_dlimit']){
						#超限，不予下载
						$msgtitle = "你不能下载软件：{$arctitle}！";
						$moremsg = "你今日的下载上限 <font color='red'>".$GLOBALS['cfg_dlimit']." 次</font> 已满！";
						include_once(DEDETEMPLATE.'/plus/view_msg.htm');
						exit(0);
					}else{
						$newArr = array_merge($arr,[$id]);
						// echo $id;
						// print_r($arr);
						// print_r($newArr);
						// //echo $a = implode(',', $newArr);
						$dtNew = date('Ymd')."|".implode('##', $newArr);
						#未超限，更新下载id记录
						$dtInsert = "UPDATE `#@__member` SET `dtime`='{$dtNew}' WHERE `mid`='{$cfg_ml->M_ID}'";
						$dsql->ExecNoneQuery($dtInsert);
					}
				}
			}else{
				//echo 7;
				#不是今天，那么构建
				$dtStr = date('Ymd')."|".$id;
				$updtsql = "UPDATE `#@__member` SET `dtime`='{$dtStr}' WHERE `mid`='{$cfg_ml->M_ID}'";
				$dsql->ExecuteNoneQuery($updtsql);
			}
		}
	}//-----
}
?>