<?php
include 'koneksi1.php';

$id_reservasi = $_POST['id_reservasi'];
$id_tamu = $_POST['id_tamu'];
$id_kamar = $_POST['id_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$tgl_checkIncheckOut = $_POST['tgl_checkIncheckOut'];
$total_harga = $_POST['total_harga'];

mysqli_query($koneksi,"insert into reservasi values ('$id_reservasi','$id_tamu','$id_kamar','$tipe_kamar','$tgl_checkIncheckOut','$total_harga')");
header("location:reservasi.php");
?>