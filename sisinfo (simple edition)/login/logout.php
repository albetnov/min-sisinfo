<?php 
//logout files to destroy session
session_start();
session_destroy();
header("location:login.php?pesan=Anda sudah keluar!");
?>