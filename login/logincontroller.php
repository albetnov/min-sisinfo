<?php
//this is a controller file which handling a Login. 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($koneksi, "SELECT * FROM users where username='$username' and password='$password'");

$cek = mysqli_num_rows($result);

if($cek > 0) {
    $data = mysqli_fetch_assoc($result);
    if($data['level'] == "admin"){
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['status'] = "sudah_login";
    $_SESSION['id_login'] = $data['id'];
    $_SESSION['level'] = "admin";
    header("location:index/admin.php");
    } elseif($data['level'] == "user") {
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['status'] = "sudah_login";
        $_SESSION['id_login'] = $data['id'];
        $_SESSION['level'] = "user";
        header("location:index/index.php");
    }
}else{
    header("location:login.php?pesan=data user login tidak ditemukan.");
}
?>