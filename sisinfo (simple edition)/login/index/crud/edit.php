<?php 
//view of edit data
session_start();
include '../../koneksi.php';
if($_SESSION['status'] != 'sudah_login'){
  die;
}
if (isset($_GET['id'])) {
    $id = ($_GET["id"]);
    $query = "SELECT * FROM kerja where id='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
   }
   $data = mysqli_fetch_assoc($result);
      if (!count($data)) {
         echo "<script>alert('Data tidak ditemukan pada database');window.location='edit.php';</script>";
      }
 } else {
   echo "<script>alert('Masukkan data id.');window.location='edit.php';</script>";
 }         
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit Data Kerja</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <body>
    <div class="card">
      <div class="card-body">
    <form action="proses_edit.php" method="POST">
    <input name="id" value="<?php echo $data['id']; ?>"  hidden />
      <div class="form-group">
        <label>Nama:</label>
        <input type="text" class="form-control" placeholder="Ketikkan namamu!" name="nama" value="<?php echo $data['nama'];?>" required>
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
        <input type="text" class="form-control" placeholder="Ketikkan perusahaanmu" name="namaperusahaan" value="<?php echo $data['nama_perusahaan'];?>" required>
      </div>
      <div class="form-group">
        <label>Jabatan:</label>
        <input type="text" class="form-control" placeholder="Ketikkan Jabatanmu!" value="<?php echo $data['jabatan'];?>" name="jabatan" required>
      </div>
      <div class="form-group">
        <label>Tahun Kerja:</label>
        <input type="number" class="form-control" min="1900" max="2099" step="1" name="tahun" value="<?php echo $data['tahun_kerja'];?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Kirim</button>
      <a href="../index.php" class="btn btn-secondary">Kembali</a>
    </form>
      </div>
    </div>
  </body>
</html>