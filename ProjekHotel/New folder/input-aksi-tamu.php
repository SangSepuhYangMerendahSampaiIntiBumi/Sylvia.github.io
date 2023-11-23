<?php
include 'koneksi1.php';

$id_tamu = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telepon = $_POST['telepon'];

mysqli_query($koneksi,"insert into tamu values ('$id_tamu','$nama_tamu','$alamat','$jenis_kelamin','$telepon')");
header("location:tamu.php");
?>