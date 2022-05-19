<?php
session_start();
if(isset($_SESSION["page"])){
    $_SESSION["page"]=$_GET["pn"];
}
else $_SESSION["page"]=1;

$page=$_SESSION["page"];

$page_response="";
$response="";
//디비 연결 
$con=mysqli_connect("localhost","root","","board");
if(!$con)
{
    die("리스트를 불러오기 위한 데이터베이스 연결 실패".mysqli_connect_error());
}


//페이지 몇 개 만들지 정하는곳
$page_query="select count(*) as cnt from boards";
$page_query_result=mysqli_query($con,$page_query);
$get_page_cnt=mysqli_fetch_array($page_query_result);

$page_count=$get_page_cnt["cnt"]/5;
if($get_page_cnt["cnt"]%5!=0){
    $page_count=$page_count+1;
}

for($i=1;$i<=$page_count;$i++){
    $page_response=$page_response."
    <div class='page'>
    <input type='button' class='page_button' value='".$i."'>
    </div>
    ";
}

//페이지

$a=(int)$page*5-5;

$sql="select * from boards order by num desc limit {$a},5";
$result=mysqli_query($con,$sql);

$record_number=mysqli_num_rows($result);
if($record_number){
    for($i=0;$i<$record_number;$i++){
    $row=mysqli_fetch_array($result);

    $response=$response."
    <tr>
    <td><a href='show_post.php?title=".$row["title"]."'>".$row["title"]."</a></td>
    <td>".$row["nname"]."</td>
    <td>".$row["regist_day"]."</td>
    </tr>
    ";
    }
    
} 
    $response=$response.",".$page_response;

    mysqli_close($con);
    echo $response;

    

?>