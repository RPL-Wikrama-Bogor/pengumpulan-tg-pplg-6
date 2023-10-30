<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: #3498db;
        }
    </style>
</head>
<body>
    <h1>Informasi Nilai</h1>

    <?php
    $nilai = [80, 78, 72, 84, 92, 88];
    echo "<table>";
    echo "<tr><th>Nilai Saya</th></tr>";
    echo "<tr><td>" . implode(", ", $nilai) . "</td></tr>";
    echo "</table>";

    echo "<table>";
    echo "<tr><th>Dari Keseluruhan Nilai Yang Paling Tinggi</th></tr>";
    echo "<tr><td>" . max($nilai) . "</td></tr>";
    echo "</table>";

    echo "<table>";
    echo "<tr><th>Dari Keseluruhan Nilai Yang Paling Rendah</th></tr>";
    echo "<tr><td>" . min($nilai) . "</td></tr>";
    echo "</table>";

    $nilai2 = $nilai;
    asort($nilai2);

    echo "<table>";
    echo "<tr><th>Urutan Terkecil ke Terbesar</th></tr>";
    echo "<tr><td>" . implode(", ", $nilai2) . "</td></tr>";
    echo "</table>";

    arsort($nilai2);

    echo "<table>";
    echo "<tr><th>Urutan Terbesar ke Terkecil</th></tr>";
    echo "<tr><td>" . implode(", ", $nilai2) . "</td></tr>";
    echo "</table>";

    $average = round(array_sum($nilai) / count($nilai));

    echo "<table>";
    echo "<tr><th>Rata-Rata Nilai</th></tr>";
    echo "<tr><td>" . $average . "</td></tr>";
    echo "</table>";

    $key = array_search(min($nilai), $nilai);
    $nilaiganti = [75];
    array_splice($nilai, $key, 1, $nilaiganti);

    echo "<table>";
    echo "<tr><th>Setelah Perbaikan</th></tr>";
    echo "<tr><td>" . implode(", ", $nilai) . "</td></tr>";
    echo "</table>";

    arsort($nilai);

    echo "<table>";
    echo "<tr><th>Urutan Terbesar ke Terkecil Setelah Perbaikan</th></tr>";
    echo "<tr><td>" . implode(", ", $nilai) . "</td></tr>";
    echo "</table>";
    ?>
</body>
</html>
