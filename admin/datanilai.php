<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Nilai</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="dashboard.php"><img src="images/tel-u.png" width="20px"></a></a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="about.php">About</a></li>
      </li>
      <li class="active"><a href="datanilai.php">Data Nilai</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <li><a href="index.php"><span class="glyphicon glyphicon-download-alt"></span> Keluar</a></li></B>
    </ul>
  </div>
</nav>
<div class="container">
  <h2>Data Nilai</h2>
  <div class="panel panel-default">
    <div class="panel-body">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Semester</th>
        <th>IP</th>
        <th>Aksi</th>
      </tr>
      <?php 
    include 'koneksi.php';
    $data = mysqli_query($koneksi,"select * from ipk");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $d['semester']; ?></td>
        <td><?php echo $d['ipk']; ?></td>
        <td>
           <a href="edit.php?semester=<?php echo $d['semester']; ?>"class="btn btn-warning">Edit</a>
            <a href="hapus.php?semester=<?php echo $d['semester']; ?>"onclick="return confirm('Anda Yakin Menghapus?');" class="btn btn-danger">Hapus</a>
         </td>
      </tr>
      <?php 
    }
    ?>
    </thead>
    
  </table>
     <div class="table-responsive">
      <a href="tambah.php" class="ml-auto btn btn-sm btn-primary">Tambah</a>
     </div>
  </div>
</div>
</body>
</html>
