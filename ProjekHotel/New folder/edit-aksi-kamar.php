<?php
include 'koneksi1.php';

$id_kamar = $_POST['id_kamar'];
$nomor_kamar = $_POST['nomor_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga = $_POST['harga'];

mysqli_query($koneksi,"update kamar set id_kamar='$id_kamar',nomor_kamar='$nomor_kamar',tipe_kamar='$tipe_kamar',harga='$harga' where id_kamar='$id_kamar'");

header("location: kamar.php");
?>