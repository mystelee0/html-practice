let a=document.querySelector(".page_button");
a.addEventListener("click",myfunction);

function myfunction(){
const showboard=new XMLHttpRequest();
	
	showboard.onload=function(){
		const board=document.querySelector(".notice_board table tbody");
        const page_div=document.querySelector("#page_wrapper");
		const result=this.responseText.split(",");
		board.innerHTML+=result[0];
        page_div.innerHTML+=result[1];
	}
	
        
	showboard.open("GET","index_show_list.php?pn="+a.value);
	showboard.send();
}