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
        $hargaPer100Gram = 500; // Harga per 100 gram (setara dengan 0.1 kg)
        $diskon = 0.05; // Diskon 5%

        // Mengambil berat buah jeruk dari input form
        $beratBuahKg = $_POST['berat'];

        // Menghitung total harga sebelum diskon (harga per kg * berat kg)
        $totalHargaSebelumDiskon = $hargaPer100Gram * 10 * $beratBuahKg;

        // Menghitung besarnya diskon (5% dari total harga sebelum diskon)
        $besarDiskon = $diskon * $totalHargaSebelumDiskon;

        // Menghitung total harga setelah diskon
        $totalHargaSetelahDiskon = $totalHargaSebelumDiskon - $besarDiskon;

        // Menampilkan hasil perhitungan
        echo "<h2>Hasil Perhitungan:</h2>";
        echo "Berat Buah Jeruk: " . $beratBuahKg . " kg<br>";
        echo "Total Harga Sebelum Diskon: " . $totalHargaSebelumDiskon . " rupiah<br>";
        echo "Diskon: " . $besarDiskon . " rupiah<br>";
        echo "Total Harga Setelah Diskon: " . $totalHargaSetelahDiskon . " rupiah<br>";
    }
    ?>
</body>
</html>
