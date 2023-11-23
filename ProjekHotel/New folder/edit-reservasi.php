<h3>edit data reservasi</h3>

<?php
include 'koneksi1.php';
$id=$_GET['id'];
$data = mysqli_query($koneksi,"select * from reservasi where id_reservasi='$id'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-reservasi.php">
<table>
    <tr>
        <td>id_reservasi</td>
        <td>
            <input type="number" name="id_reservasi" value="<?php echo $tampil['id_reservasi']?>">
        </td>
    </tr>
    <tr>
        <td>id_tamu</td>
        <td>
            <input type="text" name="id_tamu" value="<?php echo $tampil['id_tamu']?>">
        </td>
    </tr>
    <tr>
        <td>id_kamar</td>
        <td>
            <input type="text" name="id_kamar" value="<?php echo $tampil['id_kamar']?>">
        </td>
    </tr>
    <tr>
        <td>tipe_kamar</td>
        <td>
            <input type="text" name="tipe_kamar" value="<?php echo $tampil['tipe_kamar']?>">
        </td>
    </tr>
    <tr>
        <td>tgl_checkIncheckOut</td>
        <td>
            <input type="text" name="tgl_checkIncheckOut" value="<?php echo $tampil['tgl_checkIncheckOut']?>">
        </td>
    </tr>
    <tr>
        <td>total_harga</td>
        <td>
            <input type="text" name="total_harga" value="<?php echo $tampil['total_harga']?>">
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="simpan">
        </td>
    </tr>
</table>
</form>            
<?php
}
?>
