//동적 생성한 요소 이벤트 바인딩 (페이지 번호를 눌렀을때 리스트를 다시 불러오는 작업)
const a=document.querySelectorAll("#page_wrapper");

a.forEach(function(value,index){
a[index].addEventListener("click",myfunction);
});

function myfunction(e){
const showboard=new XMLHttpRequest();
	
	showboard.onload=function(){
		const board=document.querySelector(".notice_board table tbody");
        const page_div=document.querySelector("#page_wrapper");
		const result=this.responseText.split(",");
		board.innerHTML=result[0];
        page_div.innerHTML=result[1];
	}
	
        
	showboard.open("GET","index_show_list.php?pn="+e.target.value);
	showboard.send();
	
}