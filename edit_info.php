<?php
//수정한 회원정보 디비에 입력
$pw=$_POST["pw"];
$email=$_POST["email"];
$site=$_POST["site"];

session_start();
$nname=$_SESSION["nname"];

$conn=mysqli_connect("localhost","root","","board");
if($pw==""){
    $email=$email."@".$site;
    $sql="update user set email='$email' where nname='$nname'";
}
else if($email==""){
    $sql="update user set upw='$pw' where nname='$nname'";
}
else {
    $email=$email."@".$site;
    $sql="update user set upw='$pw',email='$email' where nname='$nname'";
}

$result=mysqli_query($conn,$sql);
mysqli_close($conn);
echo "<script>location.replace('index.html')</script>";

?>