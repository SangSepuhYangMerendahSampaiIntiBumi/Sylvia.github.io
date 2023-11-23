<h3>Eid_kamar</h3>

<link rel="stylesheet" type="text/css" href="style.css">
<?php
include 'koneksi2.php';
$NIK= $_GET['id'];
$data = mysqli_query($koneksi2,"SELECT * FROM pengunjung WHERE NIK='$NIK'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="editaksi2.php">
<table>
    <tr>
        <td>NIK</td>
        <td><input type="number" name="NIK" value="<?php echo $tampil['NIK']; ?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="Nama" value="<?php echo $tampil['Nama']; ?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="Alamat" value="<?php echo $tampil['Alamat']; ?>"></td>
    </tr>
    <tr>
        <td>Umur</td>
        <td><input type="text" name="Umur" value="<?php echo $tampil['Umur']; ?>"></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><input type="text" name="Gender" value="<?php echo $tampil['Gender']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>