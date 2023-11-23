<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #000;
        color: #fff;
        font-family: Arial, sans-serif;
    }

    table {
        border-collapse: collapse;
        width: 50%;
        border: 2px solid #333;
        margin-bottom: 20px;
        background-color: rgba(0, 0, 0, 0.7);
    }

    table, th, td {
        border: 1px solid #333;
    }

    th, td {
        padding: 10px;
        text-align: left;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
    }

    th {
        background-color: #222;
    }

    tr{
        background-color: #333;
    }

    input[type="number"], input[type="text"], input[type="time"] {
        width: 100%;
        padding: 8px;
        border: 2px solid #ccc;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
    }

    input[type="submit"] {
        padding: 8px 16px;
        border: 2px solid #ccc;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: rgba(0, 0, 0, 0.9);
    }
</style>


<h3>TAMBAH DATA PINJAM</h3>
<form method="post" action="inputaksi1.php">
    <table>
    <tr>
        <td>NIP</td>
        <td><input type="number" name="NIP"></td>
    </tr>
    <tr>
        <td>Nama_Karyawan</td>
        <td><input type="text" name="Nama_Karyawan"></td>
    </tr>
    <tr>
        <td>Jam_Masuk</td>
        <td><input type="time" name="Jam_Masuk"></td>
    </tr>
    <tr>
        <td>Jam_Keluar</td>
        <td><input type="time" name="Jam_Keluar"></td>
    </tr> 
    <tr>   
        <td>Gender</td>
        <td><input type="text" name="Gender"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
<center>
</form>