<h3>edit data karyawan</h3>

<?php
include 'koneksi1.php';
$id=$_GET['id'];
$data = mysqli_query($koneksi,"select * from karyawan where id_karyawan='$id'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-karyawan.php">
<table>
    <tr>
        <td>id_karyawan</td>
        <td>
            <input type="number" name="id_karyawan" value="<?php echo $tampil['id_karyawan']?>">
        </td>
    </tr>
    <tr>
        <td>nama</td>
        <td>
            <input type="text" name="nama" value="<?php echo $tampil['nama']?>">
        </td>
    </tr>
    <tr>
        <td>alamat</td>
        <td>
            <input type="text" name="alamat" value="<?php echo $tampil['alamat']?>">
        </td>
    </tr>
    <tr>
        <td>jenis_kelamin</td>
        <td>
            <input type="text" name="jenis_kelamin" value="<?php echo $tampil['jenis_kelamin']?>">
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
