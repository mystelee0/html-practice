<?php
$con=mysqli_connect("localhost","root","","board");
if(!$con)
{
    die("리스트를 불러오기 위한 데이터베이스 연결 실패".mysqli_connect_error());
}
//$sql="select * from boards order by num desc limit 5";
$sql="select * from boards";
$result=mysqli_query($con,$sql);

$record_number=mysqli_num_rows($result);
if($record_number){
//$i=$record_number/5;
//$j=$record_number%5;
        $row=mysqli_fetch_array($result);

        $response="";
        $response="
        <tr>
        <td><a href='show_post.php?title=".$row["title"]."'>".$row["title"]."</a></td>
        <td>".$row["nname"]."</td>
        <td>".$row["regist_day"]."</td>
        </tr>
        ";
        
    echo json_encode($response);
}
?>