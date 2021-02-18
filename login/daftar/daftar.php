<?php
//configuration file for registering an account
require_once('../koneksi.php');

if(isset($_POST['regis']))
{
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    if(empty($username) || empty($nama) || empty($password))
    {
        echo 'Isi dong';
    }
        $pass=$password;
        $sql = "INSERT INTO users (nama,username,password,level) values ('$nama','$username','$pass','user')";
        $result = mysqli_query($koneksi,$sql);
        if($result)
        {
            header("location:../login.php");
        } else {
            echo 'data gagal disimpan!';
        }
}
?>