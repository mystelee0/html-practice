let nname=document.getElementById("nname");
nname.addEventListener("focusout",check_value);
nname.addEventListener("focus",border_green);

function border_green(){
    if(!nname.value)
    nname.style.border="1px solid #03c75a";
}
function check_value(){
    if(!nname.value){
        nname.style.border="1px solid #dadada";
        return ;
    }
    const xmlhttp=new XMLHttpRequest();
    xmlhttp.onload=function(){
        
        if(this.responseText==="1"){
            nname.style.border="2px solid #db2607";
            document.getElementById("check").value="n";
        }
        else {
            nname.style.border="2px solid green";
            document.getElementById("check").value="y";
        }
    }
    xmlhttp.open("GET","signup_check_nname.php?id_value="+nname.value);
    xmlhttp.send();
}


