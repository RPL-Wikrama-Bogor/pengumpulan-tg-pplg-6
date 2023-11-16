<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urut Angka</title>
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
