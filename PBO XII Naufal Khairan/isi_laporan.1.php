<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form isi laporan</title>
    <link rel="stylesheet" href="./bs/css/bootstrap.min.css">
</head>
<body>
    <br>
    <br>
<form>
 <center><h1>Laporan Pengaduan</h1></center> 
 
<div class="container">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Isi laporan</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
  <br>
  <button type="submit" class="btn btn-primary"></>Kirim</button>
  <div>
  <div class="mb-3">
    <br>
  <label for="formFile" class="form-label">Kirim bukti foto</label>
  <input class="form-control" type="file" id="formFile">
</div>
</form>
</body>
</html>