<?php
session_start();
if(isset($_SESSION["nname"])){
    $response= $_SESSION["nname"];
    echo $response;
}

?>