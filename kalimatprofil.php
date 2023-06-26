<!DOCTYPE html>
<html>
<head>
    <title>Klinik Kesehatan Persada</title>
    <style>
        h1 {
            text-align: center; 
        }
        .back-button {
            position: absolute; 
            top: 10px; 
            left: 10px; 
            color: #000; 
            text-decoration: none; 
            font-size: 20px; 
        }
        .corner-button {
            position: absolute;
            top: 10px;
            left: 10px;
        }
    </style>
</head>
<body>
    <?php
    $kalimat = "Klinik Kesehatan Persada"; 

    echo "<h1>$kalimat</h1>"; 
    ?>

    <p>Klinik Kesehatan Persada merupakan salah satu Klinik Kesehatan yang berada di Kota Klungkung, Bali. Klinik ini  membuka praktek Dokter Umum sehingga fasilitas layanan kesehatan hanya menyediakan pelayanan medis dasar untuk pasien umum. Klinik ini bertujuan untuk memberikan perawatan kesehatan yang meliputi diagnosis, pengobatan, dan pencegahan penyakit umum. Dokter umum di Klinik Kesehatan Persada ini memiliki pengetahuan yang luas tentang berbagai kondisi kesehatan umum dan dapat menangani berbagai masalah kesehatan non-spesifik. Mereka dapat memberikan diagnosis awal, meresepkan obat-obatan, memberikan saran medis umum, dan merujuk pasien ke spesialis jika diperlukan. Selain itu, Klinik Kesehatan Persada dengan praktek dokter umum juga bisa menyediakan pemeriksaan kesehatan rutin, vaksinasi, konsultasi kesehatan umum, dan manajemen kondisi kronis yang tidak memerlukan perawatan khusus dari spesialis.</p> <!-- Menambahkan paragraf biasa -->

    <img src="profil.jpg"> <!-- Menambahkan gambar dengan atribut src yang menunjuk ke file gambar dan atribut alt untuk deskripsi alternatif gambar -->

    <form method="post"></form>

    <!-- Tanda panah menuju halaman utama -->
    <a href="toolbar.php" class="corner-button">&#8592; Kembali ke Beranda</a>
</body>
</html>