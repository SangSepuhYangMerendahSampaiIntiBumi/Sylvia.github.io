<?php
include 'koneksi2.php';

$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Umur = $_POST['Umur'];
$Gender = $_POST['Gender'];

mysqli_query($koneksi2,"UPDATE pengunjung SET NIK='$NIK', Nama='$Nama',
Alamat='$Alamat',Umur='$Umur',Gender='$Gender' WHERE NIK='$NIK'");
header("location: Pengunjung.php"); 

?>