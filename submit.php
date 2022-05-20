<?php
//header('Content-type: text/plain; charset=utf-8');
//echo $_POST["nname"]." ".$_POST["userid"] ." ".$_POST["password"];
$conn=mysqli_connect("localhost","root","","board");
if(!$conn)
{
    die("데이터베이스 연결 실패".mysqli_connect_error());
}
$nname=$_POST["nname"];
$uid=$_POST["userid"];
$upw=$_POST["password"];
$email=$_POST["email"];

$sql="insert into user (nname,uid,upw,email) values ('$nname','$uid','$upw','$email')";
if(mysqli_query($conn,$sql)){
    echo("<script>location.replace('index.html');</script>"); 
}
else {
    echo "저장 실패 ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>
