<!DOCTYPE html>
<html>
<head>
    <title>Konversi Jam-Menit-Detik ke Total Detik</title>
</head>
<body>
    <h1>Konversi Jam-Menit-Detik ke Total Detik</h1>
    <form method="post">
        <label for="jam">Jam:</label>
        <input type="number" name="jam" required><br>
        
        <label for="menit">Menit:</label>
        <input type="number" name="menit" required><br>
        
        <label for="detik">Detik:</label>
        <input type="number" name="detik" required><br>
        
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST["jam"];
        $menit = $_POST["menit"];
        $detik = $_POST["detik"];

        $totalDetik = $jam * 3600 + $menit * 60 + $detik;

        echo "<p>Hasil konversi:</p>";
        echo "<p>$jam jam $menit menit $detik detik = $totalDetik detik</p>";
    }
    ?>
</body>
</html>