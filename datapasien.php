<?php
include("Konfigurasi.php");



$jdpage = "List";
$pg = "pasienlist.php";
$footer = "";

$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");

if (isset($_POST["act"])) {
    $act = $_POST["act"];
    switch ($act) {
        case "store":
            $nama = $_POST["txNAMA"];
            $alamat = $_POST["txALAMAT"];
            $tgllahir = $_POST["txTGLLAHIR"];
            $jk = $_POST["txJENISKELAMIN"];
            $status = $_POST["txSTATUS"];
            $tlfn = $_POST["txTELFON"];
            $tglkunjungan = $_POST["txTGLKUNJUNGAN"];

            
            $sql = "INSERT INTO tb_pasien (idpasien, nama, alamat, tgllahir, jk, status, tlfn, tglkunjungan) VALUES ('', '$nama', '$alamat', '$tgllahir', '$jk', '$status', '$tlfn', '$tglkunjungan' );";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data pasien berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
            } else {
                $footer = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Data pasien gagal ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
            }
            break;
        case "update":
            $idpasien = $_POST["txIDPASIEN"];
            $nama = $_POST["txNAMA"];
            $alamat = $_POST["txALAMAT"];
            $tgllahir = $_POST["txTGLLAHIR"];
            $jk = $_POST["txJENISKELAMIN"];
            $status = $_POST["txSTATUS"];
            $tlfn = $_POST["txTELFON"];
            $tglkunjungan = $_POST["txTGLKUNJUNGAN"];
            
            $sql = "UPDATE tb_pasien SET  nama='$nama', alamat='$alamat', tgllahir='$tgllahir', jk='$jk', status='$status', tlfn='$tlfn', tglkunjungan='$tglkunjungan' WHERE idpasien='$idpasien';";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data pasien berhasil diperbarui',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
            } else {
                $footer = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Data pasien gagal diperbarui',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
            }
            break;
        case "destroy":
            $idpasien = $_POST['idpasien'];
            $sql = "DELETE FROM tb_pasien WHERE idpasien='$idpasien';";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data pasien berhasil dihapus',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
            } else {
                $footer = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Data pasien gagal dihapus',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
            }
            break;
    }
}

if (isset($_GET["aksi"])) {
    $aksi = $_GET["aksi"];
    switch ($aksi) {
        case "new":
            $jdpage = "Tambah";
            $pg = "pasiennew.php";
            break;
        case "edit":
            $jdpage = "Update";
            $pg = "pasienedit.php";
            break;
        case "del":
            $jdpage = "Hapus";
            $pg = "pasiendel.php";
            break;
        default:
            $jdpage = "List";
            $pg = "pasienlist.php";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    
</head>
<body>
    <style>
        body {
            background-color: #f1f1f1; 
        }
        .corner-button {
            position: absolute;
            top: 10px;
            left: 10px;
        }
        
    </style>
    <div class="container">
        <h1 class="text-center"><?=$jdpage?> Data Pasien </h1>
        <?php include($pg); ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    -->
    
    <a href="toolbar.php" class="corner-button">&#8592; Kembali ke Beranda</a>

</body>
</html>