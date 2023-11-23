<?php
include 'koneksi2.php';

$No_Transaksi = $_POST['No_Transaksi'];
$NIK = $_POST['NIK'];
$NIP = $_POST['NIP'];
$ID_Kamar = $_POST['ID_Kamar'];
$Masuk = $_POST['Masuk'];
$Keluar = $_POST['Keluar'];

mysqli_query($koneksi2,"UPDATE administrasi SET No_Transaksi='$No_Transaksi', NIK='$NIK',
NIP='$NIP',ID_Kamar='$ID_Kamar',Masuk='$Masuk',Keluar='$Keluar' WHERE No_Transaksi='$No_Transaksi'");
header("location: adminidtrasi.php"); 

?>