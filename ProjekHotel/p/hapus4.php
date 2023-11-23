<?php
include 'koneksi2.php';

$id= $_GET['id'];
mysqli_query($koneksi2, "delete from kamar where ID_Kamar='$id'");

header("location: kamar.php");
?>