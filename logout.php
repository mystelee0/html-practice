<?php
session_start();
unset($_SESSION["nname"]);

echo ("
<script>
    location.href='index.html';
</script>
");
?>