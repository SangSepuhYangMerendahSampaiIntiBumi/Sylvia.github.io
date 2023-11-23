<head>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    form {
    width: 380px;
    height: 170px;
    margin: 120 px auto;
    padding: 30px;
    background-color:white ;
    border-radius: 8px;
    position: relative;
    margin-left: 0px;
    
}
</style>
<div class='tableinput'>
<body>
<h3>edit data tamu</h3>

<?php
include 'koneksi1.php';
$id=$_GET['id'];
$data = mysqli_query($koneksi,"select * from tamu where id_tamu='$id'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-tamu.php">
    <table>
    <tr>
        <td>id_tamu</td>
        <td>
            <input type="number" name="id_tamu" value="<?php echo $tampil['id_tamu']?>">
        </td>
    </tr>
    <tr>
        <td>nama_tamu</td>
        <td>
            <input type="text" name="nama_tamu" value="<?php echo $tampil['nama_tamu']?>">
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
        <td>telepon</td>
        <td>
            <input type="text" name="telepon" value="<?php echo $tampil['telepon']?>">
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="simpan">
        </td>
    </tr>
</form> 
    </table>
           
<?php
}
?>
</div>
</body>
