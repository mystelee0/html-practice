//submit이 작동되었을때 실행
let form=document.getElementById("myform");
let id=document.getElementById("userid");
let pw=document.getElementById("password");
let pw_ch=document.getElementById("password_check");

form.addEventListener("submit",check_value);

let printalert=document.getElementById("alertmessage");

function check_value(event){
    if(document.getElementById("check").value!="y"){
        printalert.innerText="닉네임이 중복됩니다.";
        event.preventDefault();
    }
    else if(document.getElementById("checkid").value!="y"){
        printalert.innerText="아이디가 중복됩니다.";
        event.preventDefault();
    }
    else if(pw.value!=pw_ch.value){
        printalert.innerText="비밀번호가 다릅니다.";
        event.preventDefault();
    }

}