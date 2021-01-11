<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sisinfo_db";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi) {
    die("koneksi gagal: ".mysql_connect_error());
}
?>