<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Harga Buah Jeruk</title>
</head>
<body>
    <h1>Kalkulator Harga Buah Jeruk</h1>
    <form method="post">
        <label for="berat">Berat Buah Jeruk (kg):</label>
        <input type="text" id="berat" name="berat" required>
        <br>
        <input type="submit" name="hitung" value="Hitung Total Harga">
    </form>

    <?php
    if(isset($_POST['hitung'])) {
        $hargaPerKg = 500 * 10;

        $beratBuahKg = floatval($_POST['berat']);

        $totalHargaSebelumDiskon = $hargaPerKg * $beratBuahKg;

        $diskon = 0.05 * $totalHargaSebelumDiskon;

        $totalHargaSetelahDiskon = $totalHargaSebelumDiskon - $diskon;

        echo "<h2>Hasil Perhitungan:</h2>";
        echo "Berat Buah Jeruk: " . $beratBuahKg . " kg<br>";
        echo "Total Harga Sebelum Diskon: " . $totalHargaSebelumDiskon . " rupiah<br>";
        echo "Diskon: " . $diskon . " rupiah<br>";
        echo "Total Harga Setelah Diskon: " . $totalHargaSetelahDiskon . " rupiah<br>";
    }
    ?>
</body>
</html>
