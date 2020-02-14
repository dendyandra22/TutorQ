<?php 
session_start();
session_destroy();
echo "berhasil logout";
header("location:index.php");
?>