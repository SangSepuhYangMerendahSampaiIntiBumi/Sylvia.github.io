<?php
include 'koneksi2.php';

$ID_Kamar = $_POST['ID_Kamar'];
$TipeKamar = $_POST['TipeKamar'];
$Harga = $_POST['Harga'];

mysqli_query($koneksi2,"UPDATE kamar SET ID_Kamar='$ID_Kamar',TipeKamar='$TipeKamar', Harga='$Harga' WHERE ID_Kamar='$ID_Kamar'");
header("location: kamar.php");

?>