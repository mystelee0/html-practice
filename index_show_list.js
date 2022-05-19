//처음 index.html 화면이 로딩됐을때 비동기식으로 게시글들을 불러온다
const showboard=new XMLHttpRequest();
	showboard.onload=function(){
		const board=document.querySelector(".notice_board table");
        const page_div=document.querySelector("#page_wrapper");
        let c=this.responseText;
		const result=c.split(",");
       
		board.innerHTML+=result[0];
        page_div.innerHTML+=result[1];
	}

	showboard.open("GET","index_show_list.php?pn=1");
	showboard.send();