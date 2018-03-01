/**
 * 
 */
 window.onload=function()
 {
 	code();

 	
 	//注册验证
 	var fm=document.getElementsByTagName('form')[0];
 	fm.onsubmit=function(){
 		//能用客户验证的  尽量用客户验证
 		//用户名验证
 		if(fm.username.value.length<2 || fm.username.value.length>20){
 			alert('用户名不得小于2位或者大于20位');
 			fm.username.value='';//清空
 			fm.username.focus();//将焦点以至表单字段
 			return false;
 			
 		}
 		//密码验证
 		if(/[<>\'\"\ ]/.test(fm.username.value)){
 			alert('用户名不得包含非法字符');
 			fm.username.value='';
 			fm.username.focus();
 			return false;
 			
 		}
 		//密码验证
 		if(fm.password.value.length<6||fm.password.value.length>40){
 			alert('密码不得小于6位或者大于40位');
 			fm.password.value='';
 			fm.password.focus();
 			return false;
 		}
 		//重复密码
 		if(fm.password.value != fm.notpassword.value){
 			alert('密码跟确认密码不一致');
 			fm.notpassword.value='';
 			fm.notpassword.focus();
 			return false;
 		}
		if(!/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/.test(fm.email.value)){
 			alert('邮箱格式不正确');
 			fm.email.value='';
 			fm.email.focus();
 			return false;
 		}
 		//棉麻提示

 		//电话号码验证
 		if(fm.phone.value.length != 11){
 	 	alert('电话号码必须11位数字');
 	 			fm.phone.value='';
 	 			fm.phone.focus();
 	 			return false;
 	 		
 		}

 		//彦曾某验证
 		if(fm.yzm.value.length != 4){
 			alert('验证码必须4位');
 			fm.yzm.value='';
 			fm.yzm.focus();
 			return false;
 		}
 		return true;
 	};
 };
 