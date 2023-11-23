<head>
    <link rel="stylesheet" href="style2.css">
</head>
<div class="tableinput">
    <body>
<h3>Tambahkan data reservasi</h3>
<form method="POST" action="input-aksi-reservasi.php">
    <table>
        <tr>
            <td>id_reservasi</td>
            <td><input type="number" name="id_reservasi"></td>
        </tr>
        <tr>
            <td>id_tamu</td>
            <td><input type="text" name="id_tamu"></td>
        </tr>
        <tr>
            <td>id_kamar</td>
            <td><input type="text" name="id_kamar"></td>
        </tr>
        <tr>
            <td>tipe_kamar</td>
            <td><input type="text" name="tipe_kamar"></td>
        </tr>
        <tr>
            <td></td>
            <td>tgl_checkIncheckOut<input type="text" name="tgl_checkIncheckOut"></td>
        </tr>
        <tr>
            <td>total_harga</td>
            <td><input type="text" name="total_harga"></td>
        </tr>
        <tr>
            <td><input type="submit" value="simpan"></td>
        </tr>
</form>
    </table>
    </body>
</div>