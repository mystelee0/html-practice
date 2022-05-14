const showboard=new XMLHttpRequest();
	showboard.onload=function(){
		const board=document.querySelector(".notice_board table tbody");
        const page_div=document.querySelector("#page_wrapper");
        let c=this.responseText;
		const result=c.split(",");
       
		board.innerHTML+=result[0];
        page_div.innerHTML+=result[1];
	}

	showboard.open("GET","index_show_list.php?pn=1");
	showboard.send();