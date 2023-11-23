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
        <th>NIP</th>
        <th>Nama Petugas</th>
        <th>Jam Masuk</th>
        <th>Jam Keluar</th>
        <th>Gender</th>
        <th>Aksi</th>
    </tr>

    <!-- Your PHP Loop Goes Here -->
    <?php
    include "koneksi2.php";
    $data = mysqli_query($koneksi2,"select *  from Petugas");
    while($tampil=mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $tampil['NIP'] ?></td>
        <td><?php echo $tampil['Nama_Karyawan'] ?></td>
        <td><?php echo $tampil['Jam_Masuk'] ?></td>
        <td><?php echo $tampil['Jam_Keluar'] ?></td>
        <td><?php echo $tampil['Gender'] ?></td>
        <td>
            <a href="hapus1.php?id=<?php echo $tampil['NIP']; ?>">Hapus</a>
            <a href="edit1.php?id=<?php echo $tampil['NIP']; ?>">Edit</a>
        </td>
    </tr>
    <?php } ?>
</table>
<a href="aksi1.php">Tambahkan Data Baru</a>

</body>
</html>
