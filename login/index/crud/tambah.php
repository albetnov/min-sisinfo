<?php 
//views of add items and its php configuration
session_start();
include '../../koneksi.php';
if($_SESSION['status'] != 'sudah_login'){
  die;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Nambah Data Kerja</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <body>
    <div class="card">
      <div class="card-body">
    <form action="proses_tambah.php" method="POST">
      <div class="form-group">
        <label>Nama:</label>
        <input type="text" class="form-control" placeholder="Ketikkan namamu!" name="nama" required>
      </div>
      <div class="form-group">
        <label>Jenis Kelamin:</label>
        <select class="form-control" name="gender">
          <option value="Pria">Pria</option>
          <option value="Wanita">Wanita</option>
        </select>
      </div>
      <div class="form-group">
        <label>Nama Perusahaan:</label>
        <input type="text" class="form-control" placeholder="Ketikkan perusahaanmu" name="namaperusahaan" required>
      </div>
      <div class="form-group">
        <label>Jabatan:</label>
        <input type="text" class="form-control" placeholder="Ketikkan Jabatanmu!" name="jabatan" required>
      </div>
      <div class="form-group">
        <label>Tahun Kerja:</label>
        <input type="number" class="form-control" min="1900" max="2099" step="1" value="2000" name="tahun" required>
      </div>
      <button type="submit" class="btn btn-primary">Kirim</button>
      <a href="../index.php" class="btn btn-secondary">Kembali</a>
    </form>
      </div>
    </div>
  </body>
</html>