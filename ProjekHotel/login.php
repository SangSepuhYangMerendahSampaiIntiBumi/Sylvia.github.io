<?php
session_start();

// Mengganti dengan informasi koneksi database Anda
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hotel.r';

// Koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (mysqli_connect_error()) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

// Tangkap data dari formulir login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa data admin
    $query = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $admin = mysqli_fetch_assoc($result);

        // Memeriksa kata sandi
        if ($password == $admin["password"]) {
            // Autentikasi sukses, simpan informasi admin ke sesi
            $_SESSION['admin_id'] = $admin['id_admin'];
            $_SESSION['admin_username'] = $admin['username'];
            $_SESSION['admin_nama'] = $admin['nama'];

            // Redirect ke halaman admin setelah login sukses
            header('Location: index.html'); // Sesuaikan dengan halaman admin yang sesuai
            exit();
        } else {
            // Password tidak cocok
            $_SESSION['login_error'] = 'Username atau password salah.';
        }
    } else {
        // Admin tidak ditemukan
        $_SESSION['login_error'] = 'Username atau password salah';
    }
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style2.css">
<head>
    <!-- ... Bagian lain dari elemen head ... -->
</head>
<body>
    <!-- Formulir login admin -->
    <section id="admin-login" class="py-5">
        <div class="tableinput">
            <h3>Login Admin</h3>
            <?php if (isset($_SESSION['login_error'])): ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['login_error']; ?>
                </div>
                <?php unset($_SESSION['login_error']); ?>
            <?php endif; ?>
            <form action="login.php" method="POST">
                <table>
                    <tr>
                        <td>id_admin:</td>
                        <td><input type="number" class="form-control" id="id_admin" name="id_admin" required></td>
                    </tr>
                    <tr>              
                        <td>username:</td>
                        <td><input type="text" class="form-control" id="username" name="username" required></td>
                    </tr>
                    <tr>                
                        <td>password:</td>
                        <td><input type="password" class="form-control" id="password" name="password" required></td>
                    </tr>
                
                        <td><button type="submit" class="btn btn-primary">Login</button></td>
                </table>
            </form>
        </div>
    </section>
    <!-- Selesai formulir login admin -->

    <!-- ... Bagian konten lainnya ... -->
</body>
</html>