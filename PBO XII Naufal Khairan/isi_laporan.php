<?php
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyrakat", "root", "");
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bs/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">lihat laporan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<form>
 <center><h1>Buat laporan</h1></center> 
 
<div class="container">
  <form action="proses._pengaduan.php" method="POST" enctype=multipart/form-data>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Isi laporan</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name = "isi_laporan"></textarea>
  <div>
  <div class="mb-3">
    <br>
  <label for="formFile" class="form-label">Kirim bukti foto</label>
  <input class="form-control" type="file" id="formFile" name=nama_foto>
  <br>
  <a href="http://localhost/PBO%20XII%20Naufal%20Khairan/data_laporan.php"><button type="submit" class="btn btn-primary">Kirim</button></a>
</div>
</form>
</body>
</html>