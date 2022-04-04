<!doctype html>
<html>
    <head>
        <meta charset="utf8">
    </head>
    <body>
<?php
$userid=$password="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
$userid=$_POST["userid"];
$password=$_POST["password"];
}
echo "<p>".$userid." ".$password."</p>";
echo "document root : " .$_SERVER["DOCUMENT_ROOT"];
?>
</body>
</html>