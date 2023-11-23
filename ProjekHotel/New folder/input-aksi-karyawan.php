<?php
include 'koneksi1.php';

$id_karyawan = $_POST['id_karyawan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi,"insert into karyawan values ('$id_karyawan','$nama','$alamat','$jenis_kelamin')");
header("location:karyawan.php");
?>