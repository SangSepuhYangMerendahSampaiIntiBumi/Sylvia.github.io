<?php
include 'koneksi2.php';

$id= $_GET['id'];
mysqli_query($koneksi2, "delete from administrasi where No_Transaksi='$id'");

header("location: adminidtrasi.php");
?>