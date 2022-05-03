<!doctype html>
<html>
    <head>
        <meta charset="utf8">
    </head>
    <body>
<?php
$userid=$_POST["userid"];
$password=$_POST["password"];

$conn=mysqli_connect("localhost","root","","board");
if(!$conn)
{
    die("데이터베이스 연결 실패".mysqli_connect_error());
}

$sql="select * from user where uid='$userid'";
$result=mysqli_query($conn,$sql);
$num_match=mysqli_num_rows($result);

mysqli_close($conn);

if($num_match){
    $row=mysqli_fetch_array($result);
    $db_upw=$row["upw"];
    if($db_upw==$password){
        session_start();
        $_SESSION["nname"]=$row["nname"];

        echo("<script> location.href='index.html';</script>"); 
        //echo $_SESSION["nname"];  자바스크립트의 세션스토리지와 php의 세션은 다르다 ... 
    }
    else echo  "아이디 또는 비밀번호가 틀렸습니다. ";
}
else {
    echo "아이디 또는 비밀번호가 틀렸습니다. ";
}
?>
</body>
</html>