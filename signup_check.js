//submit이 작동되었을때 실행
let aaa=document.getElementById("myform");
aaa.addEventListener("submit",check_value);

let id=document.getElementById("useridv");
let pw=document.getElementById("password");
let pw_ch=document.getElementById("password_check");

let printalert=document.getElementById("alertmessage");
function check_value(event){
    if(document.getElementById("check").value!="y"){
        printalert.innerText="닉네임을 검사하세요";
        event.preventDefault();
    }
    if(!id.value){
        printalert.innerText="아이디를 입력해 주세요";
        event.preventDefault();
    }
    if(pw.value!=pw_ch.value){
        printalert.innerText="비밀번호가 다릅니다.";
        event.preventDefault();
    }
    else if(!pw.value||!pw_ch.value){
        printalert.innerText="비밀번호를 입력해 주세요";
        event.preventDefault();
    }

}