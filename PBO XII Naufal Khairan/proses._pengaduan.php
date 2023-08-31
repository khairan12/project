<?php
$isi = $_POST['isi_laporan'];
$nama_foto = $_FILES['nama_foto']['name'];
$asal_foto = $_FILES['nama_foto']['tmp_name'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyrakat", "root", "");

$tanggal = date ('y-m-d');

$koneksi->query("insert into pengaduan values('','$tanggal', '123' '$isi', '$nama_foto', 'proses')");
move_uploaded_file($asal_foto, "image/$nama_foto");

header("location:isi_laporan.php");

?>