<?php
header('Content-type: text/plain; charset=utf-8');
$id_value=$_GET["id_value"];

//create connection

$conn=mysqli_connect("localhost","root","","board");

if(!$conn)
{
    die("데이터베이스 연결 실패".mysqli_connect_error());
}
/*
$insert_query="INSERT INTO user VALUES('롤','testid','testpwd',0)";
if($conn->query($insert_query)){
    echo "저장완료 및 가입완료";
}else{
    echo "error".$insert_query."<br>".$conn.error;
}
*/
$sql="select * from user where nname='$id_value'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "1";
    /*
    while($row=mysqli_fetch_assoc($result)){
        echo "닉네임".$row["nname"]." 아이디 ".$row["uid"]." 비밀번호 ".$row["upw"]; 
    }
    */
}else{
    echo "0";
}

?>