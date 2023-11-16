<!doctype html>
<html>
<head>
<title>로그인</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style> 
* {
box-sizing: border-box;
}
header{
text-align:center;
margin-top:80px;
margin-bottom:40px;
}
.super{
border:2px solid red; 
text-align:center;

}
.form_wrapper{
display:inline-block;
border:2px solid orange ;
border-radius:5px;
padding:20px;
text-align:center;
width:360px;
}
.login_form{
width:100%;
display:inline-block; 
}

.login_form input{
width:100%;
padding:10px 15px;
margin: 5px 0;
border-radius:5px;
border:1px solid #dadada;
}
.login_form input:focus{
outline:none; 
border: 1px solid #03c75a;
}
.login_form input[type=submit]{
background-color: #4CAF50;
color:white;
border-radius:5px;
width:100%;
padding:10px 15px;
margin-top:50px;
margin-bottom:0px;
border:none;
}
ul{
list-style:none;
text-align:center;
padding:0;
}
a{text-decoration:none;}
</style>

</head>

<body>
    <header><h1 style="font-size:40px">게시판 로그인</h1></header>
    <div class="super">
        <div class="form_wrapper">
            <form action="login.php" method="post" class="login_form">
                <div>
                <input type="text" id="userid" name="userid" placeholder="아이디" required autofocus >
                </div>
                <div>
                <input type="password" id="password" name="password" placeholder="비밀번호">
                </div>
                <div>
                <input type="submit" value="로그인" >
                </div>
                </form>
        
            <ul>
                <li><a href="signup.html">회원가입</a></li>
                </ul>
        </div>
        </div>
    </body>
    </html>
