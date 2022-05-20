document.addEventListener("focusout",check_value);
document.addEventListener("click",border_green);
function border_green(event){
    if(event.target.id=="nname"||event.target.id=="userid"){
    if(!event.target.value)
    event.target.style.border="1px solid #03c75a";
    }
}

function check_value(event){
    if(event.target.id=="nname"||event.target.id=="userid"){
    if(!event.target.value){
        event.target.style.border="1px solid #dadada";
        return ;
    }
    const xmlhttp=new XMLHttpRequest();
    xmlhttp.onload=function(){
        if(this.responseText==="true"){
            event.target.style.border="2px solid #db2607";
            if(event.target.id=="nname")
            document.getElementById("check").value="n";
            document.getElementById("checkid").value="n";
        }
        else {
            event.target.style.border="2px solid green";
            if(event.target.id=="nname")
            document.getElementById("check").value="y";
            document.getElementById("checkid").value="y";
        }
    }
    xmlhttp.open("POST","signup_check_nname.php");
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("id_value="+event.target.value+"&id_name="+event.target.id);
}
}


