<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dbpasien';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        $username = '';
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $password = '';
    }

    $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: toolbar.php");
        exit();
    } else {
        echo "";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #000; 
            color: #fff; 
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #ff0000; 
            color: #fff; 
        }
    </style>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</head>
<body>
    <h2>Form Login</h2>
    <form method="POST" action="">
        <label for="username">Username</label>
        <input type="text" name="username" required><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required><br> <!-- Tambahkan ID "password" untuk mengidentifikasi input password -->

        <input type="checkbox" onclick="togglePasswordVisibility()"> Show Password <br> <!-- Tambahkan checkbox untuk mengaktifkan/menonaktifkan tampilan kata sandi -->

        <input type="submit" value="Login">
        <!DOCTYPE html>
<html>
<head>
    <title>Data Pasien</title>
    
    <!-- Tambahkan CSS dan kode lainnya -->
</head>
<body>
    <!-- Konten halaman -->

    <!-- Tombol Keluar -->
    <form method="post"></form>

    <!-- Tanda panah menuju halaman utama -->
    <br>
    <br>
    <a href="index.php">&#8592; Kembali ke Halaman Utama</a>
</body>
</html>









        