<!DOCTYPE html>
<html>
<head>
    <title>Konversi Detik ke Jam-Menit-Detik</title>
</head>
<body>
    <h1>Konversi Detik ke Jam-Menit-Detik</h1>
    <form method="post">
        <label for="total_detik">Total Detik:</label>
        <input type="text" id="total_detik" name="total_detik" required>
        <br>
        <input type="submit" name="konversi" value="Konversi ke Jam-Menit-Detik">
    </form>

    <?php
    if(isset($_POST['konversi'])) {
        // Mengambil total detik dari input form
        $totalDetik = intval($_POST['total_detik']);

        // Menghitung jam, menit, dan detik
        $jam = (int) ($totalDetik / 3600);
        $sisaDetik = $totalDetik % 3600;
        $menit = (int) ($sisaDetik / 60);
        $detik = $sisaDetik % 60;

        // Menampilkan hasil konversi
        echo "<h2>Hasil Konversi:</h2>";
        echo "$totalDetik detik sama dengan $jam jam $menit menit $detik detik.";
    }
    ?>
</body>
</html>
