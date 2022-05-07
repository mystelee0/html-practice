<?php
$title=$_POST["title"];
$article=$_POST["article"];

$date=date("Y-m-d (H:i)");
/*
$upload_dir="./upload_file"; //저장위치

$upfile_name=$_FILES["upload"]["name"];
$upfile_tmp_name=$_FILES["upload"]["tmp_name"];
$upfile_type=$_FILES["upload"]["type"];
$upfile_size=$_FILES["upload"]["size"];
$upfile_error=$_FILES["upload"]["error"];

if($file_name&&!$file_error){
    $file=explode(".",$file_name);
    $file_name=$file[0];
    $file_ext=$file[1];

    $new_file_name=date("Y_m_d_H_i_s");
    $copied_file_name=$new_file_name.".".$file_ext;
    $uploaded_file=$upload_dir.$copied_file_name;
}
else{
    $upfile_name="";
    $upfile_type="";
    $copied_file_name="";
}
*/
$con=mysqli_connect("localhost","root","","board");
if(!$conn)
{
    die("데이터베이스 연결 실패".mysqli_connect_error());
}
$sql="insert into board_store values('$userid','$title','$article','$date')";
mysqli_query($con,$sql);

mysqli_close($con);

echo "<script> location.href="index.html";</script>"
?>