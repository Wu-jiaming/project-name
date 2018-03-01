/**
 * 
 */
window.onload=function(){
	
	var title = document.getElementById("right_list_a").getElementsByTagName("strong");
	
	var id_ul = document.getElementById("right_list_a").getElementsByTagName("ul");
	for(var i =0 ; i<title.length; i++){
		//下拉列表中选定的元素索引值
			title[i].index = i;
			title[i].onclick = function(){
				for(var i=0; i < title.length ; i++){
					title[i].className="normal";
					id_ul[i].style.display="none";
				}
				this.className="active";
				id_ul[this.index].style.display="block";
			};
	}
	
	var title_2 = document.getElementById("right_list_a_2").getElementsByTagName("strong");
	
	var id_ul_2 = document.getElementById("right_list_a_2").getElementsByTagName("ul");
	for(var i =0 ; i<title_2.length; i++){
			title_2[i].index = i;
			title_2[i].onclick = function(){
				for(var i=0; i < title_2.length ; i++){
					title_2[i].className="normal";
					id_ul_2[i].style.display="none";
				}
				this.className="active";
				id_ul_2[this.index].style.display="block";
			};
	}
	
	
	var title_3 = document.getElementById("right_list_b_2").getElementsByTagName("strong");
	
	var id_ul_3 = document.getElementById("right_list_b_2").getElementsByTagName("ul");
	for(var i =0 ; i<title_3.length; i++){
			title_3[i].index = i;
			title_3[i].onclick = function(){
				for(var i=0; i < title_3.length ; i++){
					title_3[i].className="normal";
					id_ul_3[i].style.display="none";
				}
				this.className="active";
				id_ul_3[this.index].style.display="block";
			};
	}

};