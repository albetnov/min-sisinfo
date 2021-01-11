<?php
include 'koneksi.php';

$nama_kerja = $_POST['nama'];
$jenis_kelamin = $_POST['gender'];
$nama_perusahaan = $_POST['namaperusahaan'];
$jabatan = $_POST['jabatan'];
$tahun = $_POST['tahun'];

        $query =  "INSERT INTO kerja (nama,jenis_kelamin,nama_perusahaan,jabatan,tahun_kerja) values ('$nama_kerja','$jenis_kelamin','$nama_perusahaan',
        '$jabatan','$tahun')";
        $result = mysqli_query($koneksi, $query);
        if(!$result) {
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil ditambah.');window.location='../index.php';</script>";
        }