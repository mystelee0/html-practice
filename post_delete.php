<?php
$num=$_GET["num"];
$nname=$_GET["nname"];

session_start();


if(isset($_SESSION["nname"]))
    if($_SESSION["nname"]==$nname){
        $conn=mysqli_connect("localhost","root","","board");
        $sql="delete from boards where num='$num'";
        if(mysqli_query($conn,$sql)){
            mysqli_close($conn);
            echo "<script>alert('삭제되었습니다.'); location.href='index.html';</script>";
        }
        else "실패했습니다.";

    }


?>