<!DOCTYPE html>
<html>
<head>
    <title>Toolbar Example</title>
    <style>
        body {
            background-color: #bbff99; 
        }

        .toolbar {
            background-color: #333; 
            color: #fff; 
            padding: 10px; 
        }

        .toolbar a {
            color: #fff; 
            text-decoration: none; 
            margin-right: 10px; 
        }

        .content {
            text-align: center; 
            margin-top: 50px; 
        }

        .social-icons {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px; 
        }

        .social-icons a {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 10px; 
            text-decoration: none;
        }

        .social-icons img {
            width: 30px; 
            height: auto;
            margin-bottom: 5px; 
        }

        .logout-btn {
            margin-top: 20px; 
        }
    </style>
</head>
<body>
    <div class="toolbar">
        <a href="kalimatprofil.php">Profil</a>
        <a href="datapasien.php">Data Pasien</a>
        <a href="jadwal.php">Jadwal Dokter</a>
    </div>

    <!-- Konten halaman -->
    <div class="content">
        <h1>Selamat Datang di Klinik Kesehatan Persada</h1>
        <br>
        <br>
        <br>
        <br>

        <div class="social-icons">
            <img src="whatsap.png" alt="WhatsApp">
            +62 852 345 213 234
            <img src="email.png" alt="Email">
            persadaklinik@gmail.com
            <img src="instagram.png" alt="Instagram">
            @persadaklinik
            <img src="facebook.png" alt="Facebook">
            Persada Klinik Kesehatan
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- Tombol Logout dengan konfirmasi -->
        <form action="logout.php" method="POST">
            <button type="submit" name="logout" class="logout-btn" onclick="return confirmLogout();">Logout</button>
        </form>
    </div>

    
    <script>
        function confirmLogout() {
            if (confirm("Apakah Anda yakin ingin logout?")) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</body>
</html>