<?php
session_start();
include 'koneksi.php';
if($_SESSION['status'] != "sudah_login"){
  die;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dokumen Informasi Alumni</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbar-static/">

    <!-- Bootstrap core CSS -->
<link href="css/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/css/navbar-top.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="#">SisInfo | CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kuliah.php">Kuliah</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php">Logout</a>
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<main role="main" class="container">
  <a href="crud/tambah.php" class="btn btn-primary">Tambah Data</a>
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Nama Perusahaan</th>
        <th>Jabatan</th>
        <th>Tahun Kerja</th>
        <th class="text-center" colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
                            $query = "SELECT * FROM kerja ORDER BY id ASC";
                            $result = mysqli_query($koneksi, $query);
                            if(!$result){
                              die ("Query Error: ".mysqli_errno($koneksi).
                                " - ".mysqli_error($koneksi));
                            }
                            $no = 1;
                            while($row = mysqli_fetch_assoc($result))
                            {
                            ?>
      <tr>
        <td><?php echo $row['nama'];?></td>
        <td><?php echo $row['jenis_kelamin'];?></td>
        <td><?php echo $row['nama_perusahaan'];?></td>
        <td><?php echo $row['jabatan'];?></td>
        <td><?php echo $row['tahun_kerja'];?></td>
        <td><a type="button" href="crud/edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
        <td><a class="btn btn-danger" onclick="return confirm('Yakin ingin hapus data?')" href="crud/hapus.php?id=<?php echo $row['id']; ?>">Hapus</a></td>
      </tr>
      <?php $no++; } ?>
    </tbody>
  </table>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
