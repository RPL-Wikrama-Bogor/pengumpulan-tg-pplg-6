<!DOCTYPE html>
<html>
<head>
<title>Konversi Total Detik ke Jam-Menit-Detik</title>
</head>
<body>
    <h1>Konversi Total Detik ke Jam-Menit-Detik</h1>
    <form method="post">
        <label for="total_detik">Total Detik:</label>
        <input type="number" name="total_detik" id="total_detik" required><br>

        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalDetik = $_POST["total_detik"];

        $jam = floor($totalDetik / 3600);
        $sisaDetik = $totalDetik % 3600;
        $menit = floor($sisaDetik / 60);
        $detik = $sisaDetik % 60;

        echo "<p>Bentuk jam-menit-detik: $jam jam $menit menit $detik detik</p>";
    }
    ?>
</body>
</html>