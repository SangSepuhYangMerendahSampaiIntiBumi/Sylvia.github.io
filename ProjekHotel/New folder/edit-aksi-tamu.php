<?php
include 'koneksi1.php';

$id_tamu = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telepon = $_POST['telepon'];

mysqli_query($koneksi,"update tamu set id_tamu='$id_tamu',nama_tamu='$nama_tamu',alamat='$alamat',jenis_kelamin='$jenis_kelamin',telepon='$telepon' where id_tamu='$id_tamu'");

header("location: tamu.php");
?>