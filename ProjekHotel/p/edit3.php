<h3>Eid_kamar</h3>

<?php
include 'koneksi2.php';
$No_Transaksi= $_GET['id'];
$data = mysqli_query($koneksi2,"SELECT * FROM administrasi WHERE No_Transaksi='$No_Transaksi'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="editaksi3.php">
<table>
    <tr>
        <td>No_Transaksi</td>
        <td><input type="number" name="No_Transaksi" value="<?php echo $tampil['No_Transaksi']; ?>"></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td><input type="text" name="NIK" value="<?php echo $tampil['NIK']; ?>"></td>
    </tr>
    <tr>
        <td>NIP</td>
        <td><input type="text" name="NIP" value="<?php echo $tampil['NIP']; ?>"></td>
    </tr>
    <tr>
        <td>ID_Kamar</td>
        <td><input type="text" name="ID_Kamar" value="<?php echo $tampil['ID_Kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Masuk</td>
        <td><input type="date" name="Masuk" value="<?php echo $tampil['Masuk']; ?>"></td>
    </tr>
    <tr>
        <td>Keluar</td>
        <td><input type="date" name="Keluar" value="<?php echo $tampil['Keluar']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>