document.getElementById("getcode").onclick = function(){

	var request = new XMLHttpRequest();
	request.open("GET","active.php?id="+this.title+"&getcode=1");
	request.send();
	request.onreadystatechange = function(){
		if(request.readyState === 4){
			if(request.status === 200){
				alert("重新发送验证码成功");
			}
			else{
				alert("发生错误："+request.status);
			}
		}
	};
};