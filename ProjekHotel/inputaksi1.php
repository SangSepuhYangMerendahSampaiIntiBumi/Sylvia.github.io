<?php
include 'koneksi2.php';

$NIP = $_POST['NIP'];
$Nama_Karyawan = $_POST['Nama_Karyawan'];
$Jam_Masuk = $_POST['Jam_Masuk'];
$Jam_Keluar = $_POST['Jam_Keluar'];
$Gender = $_POST['Gender'];

mysqli_query($koneksi2,"INSERT INTO petugas Values ('$NIP','$Nama_Karyawan','$Jam_Masuk','$Jam_Keluar','$Gender')");
header("location: Petugas-1.php"); 

?>