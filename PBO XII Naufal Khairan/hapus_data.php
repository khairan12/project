<?php
$id=$_GET['id'];
$koneksi = new PDO ("mysql:host=localhost;dbname=pengaduan_masyrakat",'root','');
$query=$koneksi->query("DELETE FROM `pengaduan` WHERE id_pengaduan = '$id'"); 

header('Location: data_laporan.php');
?>