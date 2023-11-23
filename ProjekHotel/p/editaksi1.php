<?php
include 'koneksi2.php';

$NIP = $_POST['NIP'];
$Nama_Karyawan = $_POST['Nama_Karyawan'];
$Jam_Masuk = $_POST['Jam_Masuk'];
$Jam_Keluar = $_POST['Jam_Keluar'];
$Gender = $_POST['Gender'];

mysqli_query($koneksi2,"UPDATE petugas SET NIP='$NIP', Nama_Karyawan='$Nama_Karyawan',
Jam_Masuk='$Jam_Masuk',Jam_Keluar='$Jam_Keluar',Gender='$Gender' WHERE NIP='$NIP'");
header("location: Petugas-1.php"); 

?>