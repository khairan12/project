<?php
$koneksi = new PDO ("mysql:host=localhost;dbname=pengaduan_masyrakat",'root','');
$query=$koneksi->query("select * from pengaduan");
$data=$query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
    <link rel="stylesheet" href="./bs/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <center><h1 style="margin-top: 50px;" text;>Status pengaduan</h1></center>
    <br>
    <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">id_pengaduan</th>
      <th scope="col">tgl_pengaduan</th>
      <th scope="col">nik</th>
      <th scope="col">isi laporan</th>
      <th scope="col">foto</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <body class="table-group-divider">

  <?php foreach ($data as $pengaduan) { ?>
  
    <tr>
      <th scope="row"></th>
      <td><?= $pengaduan['id_pengaduan'] ?></td>
      <td><?= $pengaduan['tgl_pengaduan']?></td>
      <td><?= $pengaduan['nik']?></td>
      <td><?= $pengaduan['isi_laporan']?></td>
      <td><?= $pengaduan['foto']?></td>
      <td><?= $pengaduan['status']?></td>
      <td><a href="hapus_data.php?id=<?php echo $pengaduan['id_pengaduan']?>" class="btn btn-danger">hapus</a>
      <button type="button" class="btn btn-success">ubah</button>
    </td>
    </tr>
    

    <?php }
    ?>
    
  </tbody>
</table>
</div>
</body>
</html>