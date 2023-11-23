<?php
include 'koneksi2.php';

$id= $_GET['id'];
mysqli_query($koneksi2, "delete from pengunjung where NIK='$id'");

header("location: Pengunjung.php");
?>