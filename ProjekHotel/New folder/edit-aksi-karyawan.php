<?php
include 'koneksi1.php';

$id_karyawan = $_POST['id_karyawan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi,"update karyawan set id_karyawan='$id_karyawan',nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin' where id_karyawan='$id_karyawan'");

header("location: karyawan.php");
?>