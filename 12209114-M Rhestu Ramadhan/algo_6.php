<!DOCTYPE html>
<html>
<head>
    <title>Konversi Detik ke Jam-Menit-Detik</title>
</head>
<body>
    <h2>Konversi Total Detik ke Jam-Menit-Detik</h2>
    <form method="post">
        Masukkan total detik: <input type="number" name="total_detik" required>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $total_detik = $_POST["total_detik"];

        $jam = floor($total_detik / 3600);
        $sisa_detik = $total_detik % 3600;
        $menit = floor($sisa_detik / 60);
        $detik = $sisa_detik % 60;

        echo "Hasil konversi: $jam jam $menit menit $detik detik";
    }
    ?>
</body>
</html>
