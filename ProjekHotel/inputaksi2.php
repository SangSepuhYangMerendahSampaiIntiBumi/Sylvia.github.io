<?php
include 'koneksi2.php';

$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Umur = $_POST['Umur'];
$Gender = $_POST['Gender'];

mysqli_query($koneksi2,"INSERT INTO pengunjung values ('$NIK','$Nama','$Alamat','$Umur','$Gender')");
header("location: Pengunjung.php"); 

?>