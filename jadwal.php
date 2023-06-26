<!DOCTYPE html>
<html>
<head>
    <title>Tabel Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center; 
        }

        th {
            background-color: #f2f2f2;
        }

        .text-center {
            text-align: center;
        }

        .corner-button {
            position: absolute;
            top: 10px;
            left: 10px;
        }
    </style>
</head>
<body>
    <h1 class="text-center">Jadwal Praktek Dokter</h1>

    <table>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Hari</th>
            <th class="text-center">Waktu</th>
        </tr>
        <?php
        $data = array(
            array("1", "dr.Ratna", "Senin", "08.00 WITA - 20.00 WITA"),
            array("2", "dr.Putri", "Selasa", "08.00 WITA - 20.00 WITA"),
            array("3", "dr.Agus", "Rabu", "08.00 WITA - 20.00 WITA"),
            array("4", "dr.Putri", "Kamis", "08.00 WITA - 20.00 WITA"),
            array("5", "dr.Agus", "Jumat", "08.00 WITA - 20.00 WITA"),
            array("6", "dr.Agus", "Sabtu", "08.00 WITA - 20.00 WITA"),
            array("7", "dr.Ratna", "Minggu", "08.00 WITA - 15.00 WITA"),
        );

        foreach ($data as $row) {
            echo "<tr>";
            echo "<td class='text-center'>" . $row[0] . "</td>";
            echo "<td class='text-center'>" . $row[1] . "</td>";
            echo "<td class='text-center'>" . $row[2] . "</td>";
            echo "<td class='text-center'>" . $row[3] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Tombol Data Pasien -->
    <a href="toolbar.php" class="corner-button">&#8592; Kembali ke Beranda</a>
</body>
</html>