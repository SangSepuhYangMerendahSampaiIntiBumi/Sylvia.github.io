<?php
include 'koneksi1.php';

$id_kamar = $_POST['id_kamar'];
$nomor_kamar = $_POST['nomor_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga = $_POST['harga'];

mysqli_query($koneksi,"insert into kamar values ('$id_kamar','$nomor_kamar','$tipe_kamar','$harga')");
header("location:kamar.php");
?>