<?php
//this is how you connect your database with this file
    $host = "localhost"; //change this based on your host
    $user = "root"; //change this based on your user
    $pass = ""; //change this based on your password
    $db = "sisinfo_db"; //change this based on your database name

    $koneksi = mysqli_connect($host, $user, $pass, $db);

    if(!$koneksi) {
        die("Koneksi gagal : ".mysqli_connect_error());
    }
?>  