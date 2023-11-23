<?php
include 'koneksi2.php';

$id= $_GET['id'];
mysqli_query($koneksi2, "delete from petugas where NIP='$id'");

header("location: Petugas-1.php");
?>