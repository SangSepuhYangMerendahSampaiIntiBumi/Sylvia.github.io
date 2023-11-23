<?php
include 'koneksi2.php';

$No_Transaksi = $_POST['No_Transaksi'];
$NIK = $_POST['NIK'];
$NIP = $_POST['NIP'];
$ID_Kamar = $_POST['ID_Kamar'];
$Masuk = $_POST['Masuk'];
$Keluar = $_POST['Keluar'];

mysqli_query($koneksi2,"INSERT INTO administrasi values('$No_Transaksi','$NIK','$NIP','$ID_Kamar','$Masuk','$Keluar')");
header("location: adminidtrasi.php"); 

?>