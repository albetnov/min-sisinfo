<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_kerja = $_POST['nama'];
$jenis_kelamin = $_POST['gender'];
$nama_perusahaan = $_POST['namaperusahaan'];
$jabatan = $_POST['jabatan'];
$tahun = $_POST['tahun'];

    $query = $query = "UPDATE kerja SET nama = '$nama_kerja', jenis_kelamin = '$jenis_kelamin', nama_perusahaan = '$nama_perusahaan', jabatan = '$jabatan', tahun_kerja = '$tahun'";
    $query .= "WHERE id ='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    } else {
     echo "<script>alert('Data berhasil diubah.');window.location='../index.php';</script>";
        }
?>