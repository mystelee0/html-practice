<html>
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style> 
* {
box-sizing: border-box;
}
#div1{
    position:relative;
    border:2px solid #ccc;
    box-shadow:5px 5px 5px gray;
    width:800px; 
    min-height:400px;
    margin:30px auto;
}
#info{
    padding:15px;
    background-color: #f0f0f0;
    border_bottom:2px solid #ccc;
}
#date{
    position:absolute;
    left:300px;
}

#article,#title{
    padding:10px;
}
</style>

</head>
<?php
$title=$_GET["title"];
$link=mysqli_connect("localhost","root","","board");
$query="select * from boards where title='$title'";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)){
    $row=mysqli_fetch_array($result);
    //echo "작성자 : ".$row["nname"]." 작성날짜 : ".$row["regist_day"]." ".$row["article"];
    echo "
<div style='width:800px; margin:0 auto;'>
    <div id='div1'>

        <div id='info';>
           <span>닉네임:".$row["nname"] ."</span><span id='date'>날짜:".$row["regist_day"]."</span>
        </div>

        <div id='title';>
           <h2>제목 :".$row["title"]."</h2>
        </div>

        <p id='article';>".$row["article"]."</p>
    </div>
    <div style='float:right'>
        <a style='text-decoration:none; color:black;' href='post_delete.php?num=".$row["num"]."
        &nname=".$row["nname"]."'>삭제하기</a>
    </div>
</div>
    ";
}
else echo "작성자 불일치";
mysqli_close($link);
?>
<body>
   
</body>
</html>