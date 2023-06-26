<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    header("Location: index.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Isi</title>
    <!-- Tambahkan CSS dan kode lainnya -->
</head>
<body>
    <!-- Konten halaman -->
    
    <!-- Tombol Keluar -->
    <form method="post">
        <button type="submit">Keluar</button>
    </form>
</body>
</html>