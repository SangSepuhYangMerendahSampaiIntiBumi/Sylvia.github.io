<?php
include 'koneksi2.php';

$ID_Kamar = $_POST['ID_Kamar'];
$TipeKamar = $_POST['TipeKamar'];
$Harga = $_POST['Harga'];

mysqli_query($koneksi2,"INSERT INTO kamar Values ('$ID_Kamar','$TipeKamar','$Harga')");
header("location: kamar.php");

?>