<meta charset="utf8">
<?php
//세션여부 확인
session_start();
if(isset($_SESSION["nname"])) $username=$_SESSION["nname"];
else $username="";

if(!$username)
{
    echo("
    <script>
        alert('로그인 후 이용');
        history.go(-1);
    </script>
    ");
    exit;
}
//제목 내용 파일 
$title=$_POST["title"];
$article=$_POST["article"];

$title=htmlspecialchars($title,ENT_QUOTES);
$article=htmlspecialchars($article,ENT_QUOTES);

$date=date("Y-m-d (H:i)");

$upload_dir="./upload_file/"; //저장위치

$upfile_name=$_FILES["upload"]["name"];
$upfile_tmp_name=$_FILES["upload"]["tmp_name"];
$upfile_type=$_FILES["upload"]["type"];
$upfile_size=$_FILES["upload"]["size"];
$upfile_error=$_FILES["upload"]["error"];

if($upfile_name&&!$upfile_error){
    $file=explode(".",$upfile_name);
    $file_name=$file[0];
    $file_ext=$file[1];

    $new_file_name=date("Y_m_d_H_i_s");
    $copied_file_name=$new_file_name.".".$file_ext;
    $uploaded_file=$upload_dir.$copied_file_name; //2022_05_07.zip 이런식으로 저장

    //파일크기제한 미입력 388p 7번
    if(!move_uploaded_file($upfile_tmp_name,$uploaded_file)){
        echo("
        <script>
            alert('파일을 지정한 디렉터리에 복사하는 데 실패했습니다.');
            history.go(-1)
        </script>
        ");
        exit;
    }
}
else{
    $upfile_name="";
    $upfile_type="";
    $copied_file_name="";
}

$con=mysqli_connect("localhost","root","","board");
if(!$con)
{
    die("데이터베이스 연결 실패".mysqli_connect_error());
}
$sql="insert into boards (nname,title,article,regist_day,file_name,file_type,file_copied)";
$sql .="values('$username','$title','$article','$date',";
$sql .="'$upfile_name','$upfile_type','$copied_file_name')";

mysqli_query($con,$sql);

mysqli_close($con);

echo "<script> location.href='index.html';</script>";
?>