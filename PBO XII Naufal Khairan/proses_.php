<?php
$id = $GET['id'];

//koneksi
$koneksi = new PDO('mysql:host=localhost;dbname=ppm', 'root','');

//query
$koneksi->query("DELETE FROM pengaduan where id_pengaduan='$id");

header("location..home.php");