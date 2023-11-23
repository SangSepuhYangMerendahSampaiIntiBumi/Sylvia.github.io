<?php
include 'koneksi1.php';

$id_reservasi = $_POST['id_reservasi'];
$id_tamu = $_POST['id_tamu'];
$id_kamar = $_POST['id_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$tgl_checkIncheckOut = $_POST['tgl_checkIncheckOut'];
$total_harga = $_POST['total_harga'];

mysqli_query($koneksi,"update reservasi set id_reservasi='$id_reservasi',id_tamu='$id_tamu',id_kamar='$id_kamar',tipe_kamar='$tipe_kamar',tgl_checkIncheckOut='$tgl_checkIncheckOut',total_harga='total_harga' where id_reservasi='$id_reservasi'");

header("location: reservasi.php");
?>