<head>
    <link rel="stylesheet" href="style4.css">
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
<h3>Eid_kamar</h3>

<?php
include 'koneksi2.php';
$ID_Kamar= $_GET['id'];
$data = mysqli_query($koneksi2,"SELECT * FROM kamar WHERE ID_Kamar='$ID_Kamar'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="editaksi4.php">
<table>
    <tr>
        <td>ID_Kamar</td>
        <td><input type="number" name="ID_Kamar" value="<?php echo $tampil['ID_Kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Tipe Kamar</td>
        <td><input type="text" name="TipeKamar" value="<?php echo $tampil['TipeKamar']; ?>"></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input type="text" name="Harga" value="<?php echo $tampil['Harga']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>