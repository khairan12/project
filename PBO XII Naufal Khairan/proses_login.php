<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = $koneksi->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");

$jumlahbaris = $query->rowCount();

if($jumlahbaris > 0){
    $data = $query->fetch();

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['level'] = "masyarakat";

    header("location:halaman.php");
}else{
    header("location:form_login.php");
}