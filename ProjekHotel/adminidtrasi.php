<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
<style>
</style>
    <div class>
    <header>
                <div class="logo">
                    <div class="fristname">RN.</div>
                    <div class="lastname">HOTEL</div>
                </div>
                <nav>       
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html#about">About</a></li>
                        <li><a href="index.html#room-list">Galery</a></li>
                        <li><a href="index.html#contatc">Contatc Us</a></li>
                    </ul>
                </nav>  
                <div class="dropdown">
                    <a class="dropdown-item">Admin</a>
                    <div class="dropdown-isi">
                        <a href="Pengunjung.php">Tamu</a>
                        <a href="kamar.php">Kamar</a>
                        <a href="adminidtrasi.php">Reservasi</a>
                        <a href="Petugas-1.php">Karyawan</a>
                    </div>
                </div>
                <div class="button-container">
                    <button class="button">LOGIN</button>
                </div>
            </header>
        </div>
<center>
<table>
    <tr>
        <th>No_Transaksi</th>
        <th>NIK</th>
        <th>NIP</th>
        <th>ID_Kamar</th>
        <th>Masuk</th>
        <th>Keluar</th>
        <th>Aksi</th>
    </tr>

    <!-- Your PHP Loop Goes Here -->
    <?php
    include "koneksi2.php";
    $data = mysqli_query($koneksi2,"select *  from administrasi");
    while($tampil=mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $tampil['No_Transaksi'] ?></td>
        <td><?php echo $tampil['NIK'] ?></td>
        <td><?php echo $tampil['NIP'] ?></td>
        <td><?php echo $tampil['ID_Kamar'] ?></td>
        <td><?php echo $tampil['Masuk'] ?></td>
        <td><?php echo $tampil['Keluar'] ?></td>
        <td>
            <a href="hapus3.php?id=<?php echo $tampil['No_Transaksi']; ?>">Hapus</a>
            <a href="edit3.php?id=<?php echo $tampil['No_Transaksi']; ?>">Edit</a>
        </td>
    </tr>
    <?php } ?>
</table>
<a href="aksi3.php">Tambahkan Data Baru</a>

</body>